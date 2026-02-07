<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\PostMeta;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Jobs\FacebookPostJob;
use App\Jobs\TelegramPostJob;
use App\Jobs\PostToTwitterJob;
use App\Traits\ImageSaveTrait;
use App\Jobs\ProcessPostImages;
use App\Services\TwitterService;
use App\Jobs\FacebookPostDeleteJob;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // use Image Process Trait;
    use ImageSaveTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('backend.post.index');
    }
    public function getList(Request $request)
    {
        $search = $request->input('search');
        $page   = $request->page ?? 1;
        $limit  = 10;
        $offset = ($page - 1) * $limit;
        $query = Post::latest();

        // ✅ Search handle
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('id', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%");
            });
        }

        $total = $query->count();

        $posts = $query->skip($offset)->take($limit)->get();

        return response()->json([
            'data'    => view('backend.post.partials.post_rows', [
                'posts' => $posts,
                'page'   => $page,
                'limit'  => $limit,
                'offset' => $offset,
            ])->render(),
            'hasMore' => $total > $offset + $limit,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('priority', 'asc')->get();
        return view('backend.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4248',
        ]);

        /* ---------------- Slug ---------------- */
        do {
            $slug = Str::lower(Str::random(10));
        } while (
            Post::where('slug', $slug)->exists()
        );




        $scheduledAt = null;
        $createdAt = now();
        $status = 'published';

        /* ---------------- Schedule Logic ---------------- */
        if ($request->filled('scheduled_at')) {
            $scheduleTime = Carbon::parse($request->scheduled_at);

            if ($scheduleTime->isFuture()) {
                // future → schedule
                $scheduledAt = $scheduleTime;
                $status = 'scheduled';
            } else {
                // past → publish but backdate
                $createdAt = $scheduleTime;
                $status = 'published';
            }
        }


        /* ---------------- Create Post ---------------- */
        $post = Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'slug' => $slug,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'audio_url' => $request->audio_url,
            'status' => $status,
            'scheduled_at' => $scheduledAt,
            'is_featured' => $request->has('featuredPost') ? 1 : 0,
            'created_at' => $createdAt,
        ]);

        /* ---------------- Meta Information ---------------- */
        if ($request->filled('meta_title')) {
            $post->meta()->create([
                'title' => $request->meta_title,
                'description' => $request->meta_description,
                'tags' => $request->tags,
            ]);
        }

        /* ---------------- Image ---------------- */
        // main image
        $mainImagePath = null;
        if ($request->hasFile('image')) {
            $mainImagePath = $request->file('image')->store('uploads/post', 'public');
        }

        // gallery
        $galleryPaths = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->gallery as $image) {
                $galleryPaths[] = $image->store('uploads/post/gallery', 'public');
            }
        }

        // dispatch job for heavy processing
        ProcessPostImages::dispatch($post->id, $mainImagePath, $galleryPaths);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('backend.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories = Category::where('status', 1)->get();
        return  view('backend.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4248',
        ]);

        $post = Post::findOrFail($id);

        /* ---------------- Schedule Logic ---------------- */
        $scheduledAt = null;
        $createdAt = $post->created_at;
        $status = $request->input('status', $post->status);

        if ($request->filled('scheduled_at')) {
            $scheduleTime = \Carbon\Carbon::parse($request->scheduled_at);

            if ($scheduleTime->isFuture()) {
                // future → scheduled
                $scheduledAt = $scheduleTime;
                $status = 'scheduled';
            } else {
                // past → publish + backdate
                $createdAt = $scheduleTime;
                $status = 'published';
            }
        }

        /* ---------------- Update Post ---------------- */
        $post->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'audio_url' => $request->audio_url,
            'status' => $status,
            'scheduled_at' => $scheduledAt,
            'is_featured' => $request->has('featuredPost') ? 1 : 0,
            'created_at' => $createdAt,
        ]);

        /* ---------------- Meta Update ---------------- */
        if ($request->filled('meta_title')) {
            $post->meta()->updateOrCreate(
                ['post_id' => $post->id],
                [
                    'title' => $request->meta_title,
                    'description' => $request->meta_description,
                    'tags' => $request->tags,
                ]
            );
        }

        /* ---------------- Image ---------------- */
        // main image
        $mainImagePath = null;
        if ($request->hasFile('image')) {
            $this->deleteImage($post->image);
            $mainImagePath = $request->file('image')->store('uploads/post', 'public');
        }

        // gallery
        $galleryPaths = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->gallery as $image) {
                $galleryPaths[] = $image->store('uploads/post/gallery', 'public');
            }
        }

        // dispatch job for heavy processing
        ProcessPostImages::dispatch($post->id, $mainImagePath, $galleryPaths);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function deleteGallery(Request $request)
    {
        $gallery = Gallery::find($request->id);

        if ($gallery) {
            if (file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            $gallery->delete();
            return response()->json(['success' => true, 'message' => 'Image deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Image not found.']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $post = Post::findOrFail($id);

        try {
            //Status Change
            $post->update([
                'status' => 'draft',
            ]);
            // Delete category
            $post->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Post Deleted Successfully'], 200);
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->latest()->get();
        return view('backend.post.trash', compact('posts'));
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->find($id);

        try {
            $post->update([
                'status' => 'draft',
            ]);
            // Restore Post
            $post->restore();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Post Restored Successfully'], 200);
    }

    public function permanentlydelete(string $id)
    {
        $post = Post::withTrashed()->find($id);
        $gallery = Gallery::where('post_id', $id)->get();



        try {
            // Delete Image
            $this->deleteImage($post->image);

            // Delete Gallery Images
            if ($gallery->count() > 0) {
                foreach ($gallery as $image) {
                    $this->deleteImage($image->image);
                }
            }

            // Delete category
            $post->forceDelete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Post Permanently Deleted Successfully'], 200);
    }

    public function featured()
    {
        $featuredPosts = Post::where('is_featured', 1)->latest()->get();
        return view('backend.post.featured', compact('featuredPosts'));
    }

    public function featuredUpdate($id)
    {

        $post = Post::find($id);

        try {
            $post->update([
                'is_featured' => 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Post Removed From Featured'], 200);
    }
    public function hotUpdate($id)
    {

        $news = News::find($id);

        try {
            $news->update([
                'is_hot' => null,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'News Remove From Hot'], 200);
    }
}
