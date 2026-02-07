<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_details($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $posts = Post::where('id', '!=', $post->id)->latest()->take(5)->get();
        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();
        $releated = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->latest()->take(5)->get();
        return view('frontend.post_details', compact('post', 'previous', 'next', 'posts', 'releated'));
    }
}
