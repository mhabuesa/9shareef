<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function subscriber()
    {
        $subscribers = Subscriber::latest()->get();
        return view('backend.subscriber.index', compact('subscribers'));
    }
}
