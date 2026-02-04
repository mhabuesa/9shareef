<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::with('post')->where('status', 1)->orderBy('priority', 'asc')->get();
        $posts = Post::latest()->take(10)->get();
        return view('frontend.index', compact('banners', 'posts'));
    }
}
