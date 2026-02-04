<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('priority', 'asc')->get();
        $posts = Post::pluck('title', 'id');
        return view('backend.banner.index', compact('banners', 'posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);

        $maxPriority = Banner::max('priority') ?? 0;
        $priority = $maxPriority + 1;

        Banner::create([
            'post_id' => $request->post_id,
            'priority' => $priority,
        ]);

        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        try {
            // Delete banner
            $banner->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Banner Deleted Successfully'], 200);
    }

    public function updateStatus(Request $request, $id)
    {
        $banner = Banner::find($id);
        try {
            // Update banner status
            $banner->update([
                'status' => $banner->status == '1' ? '0' : '1',
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Banner status Updated Successfully'], 200);
    }

    public function updateAjax(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:banners,id',
            'priority' => 'required|integer|min:1',
        ]);

        Banner::where('id', $request->id)
            ->update(['priority' => $request->priority]);

        return response()->json([
            'success' => true
        ]);
    }
}
