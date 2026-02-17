<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Cache::remember('home_banners', 10800, function () {
            return Banner::with('post')
                ->where('status', 1)
                ->orderBy('priority', 'asc')
                ->get();
        });

        $posts = Cache::remember('home_latest_posts', 10800, function () {
            return Post::published()
                ->latest()
                ->select('id', 'title', 'slug', 'image', 'views', 'created_at', 'category_id', 'short_description')
                ->take(11)
                ->get();
        });

        $featuredPosts = Cache::remember('home_featured_posts', 10800, function () {
            return Post::published()
                ->where('is_featured', 1)
                ->latest()
                ->select('id', 'title', 'slug', 'image', 'views', 'created_at')
                ->take(5)
                ->get();
        });

        $categories = Cache::remember('home_categories', 10800, function () {
            return Category::where('status', 1)
                ->orderBy('priority', 'asc')
                ->get();
        });

        $mostVisited = Cache::remember('home_most_visited', 10800, function () {
            return Post::published()
                ->where('views', '>', 0)
                ->orderByDesc('views')
                ->select('id', 'title', 'slug', 'image', 'views', 'created_at')
                ->take(6)
                ->get();
        });

        return view('frontend.index', compact(
            'banners',
            'posts',
            'featuredPosts',
            'categories',
            'mostVisited'
        ));
    }

    public function countdown()
    {
        return view('frontend.countdown');
    }

    public function subscriber_store(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);
        $exists= Subscriber::where('email', $request->email)->first();
        if (!$exists) {
            Subscriber::create([
                'email' => $request->email
            ]);
        }

        return redirect()->back()->with('success','Subscribed Successfully');
    }
}
