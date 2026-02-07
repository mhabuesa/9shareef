<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/post/{post:slug}', 'post_details')->name('post.details');
});
