<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_details($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $latestPosts = Post::where('id', '!=', $post->id)->latest()->take(5)->get();
        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();
        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->published()->latest()->take(5)->get();
        $categories = Category::where('status', 1)->orderBy('priority', 'asc')->get();

        $post->increment('views');

        // $images = [
        //     [
        //         'id' => 1,
        //         'src' => asset('images/gallery/1.jpg'),
        //         'category' => 'nature',
        //         'title' => 'Misty Peaks',
        //     ],
        //     [
        //         'id' => 2,
        //         'src' => asset('images/gallery/2.jpg'),
        //         'category' => 'urban',
        //         'title' => 'Neon City',
        //     ],
        //     [
        //         'id' => 3,
        //         'src' => asset('images/gallery/3.jpg'),
        //         'category' => 'portrait',
        //         'title' => 'Desert Boy',
        //     ],
        // ];

        return view('frontend.posts.post_details', compact(
            'post',
            'previous',
            'next',
            'relatedPosts',
            'latestPosts',
            'categories'));
    }

    public function posts(Request $request, $slug = null)
    {

        $search = $request->search;
        // Featured Posts
        if ($slug === 'featured') {
            $pageTitle = 'Featured Posts';
        }

        // Category Posts
        elseif ($slug) {
            $category = Category::where('slug', $slug)->firstOrFail();
            $pageTitle = $category->name;
        }

        // Search Posts
        elseif ($search) {
            $pageTitle = 'Search Posts';
        }

        // All Posts
        else {
            $pageTitle = 'All Posts';
        }

        return view('frontend.posts.posts', compact('slug', 'search', 'pageTitle'));
    }

    public function loadPost_ajax(Request $request)
    {
        $page = $request->page ?? 1;
        $limit = 10;
        $offset = ($page - 1) * $limit;

        $query = Post::where('status', 'published');

        // Featured
        if ($request->slug === 'featured') {
            $query->where('is_featured', 1);
        }

        // Category
        elseif ($request->slug) {
            $category = Category::where('slug', $request->slug)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        // 🔥 Search Filter
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%'.$request->search.'%')
                    ->orWhere('short_description', 'like', '%'.$request->search.'%');
            });
        }

        $query->latest();

        $total = $query->count();
        $posts = $query->skip($offset)->take($limit)->get();

        return response()->json([
            'data' => view('frontend.posts.partials.post_row', compact('posts'))->render(),
            'hasMore' => $total > $offset + $limit,
        ]);
    }
}
