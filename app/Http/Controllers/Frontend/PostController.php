<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('frontend.post_details', compact(
            'post',
            'previous',
            'next',
            'relatedPosts',
            'latestPosts',
            'categories'));
    }
}