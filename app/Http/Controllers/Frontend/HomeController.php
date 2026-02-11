<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::with('post')->where('status', 1)->orderBy('priority', 'asc')->get();
        $posts = Post::latest()->published()->take(11)->get();
        $featuredPosts = Post::where('is_featured', 1)->latest()->take(5)->get();
        $categories = Category::where('status', 1)->orderBy('priority', 'asc')->get();
        $mostVisited = Post::where('status', 'published')
                    ->orderByDesc('views')
                    ->take(6)
                    ->get();
        return view('frontend.index', compact('banners', 'posts', 'featuredPosts', 'categories', 'mostVisited'));
    }

    public function countdown()
    {
        return view('frontend.countdown');
    }
}