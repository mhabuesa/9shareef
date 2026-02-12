<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/countdown', 'countdown')->name('countdown');
    Route::get('/category/{category:slug}', 'category')->name('category');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/post/{post:slug}', 'post_details')->name('post.details');
    Route::get('/posts/{slug?}', 'posts')->name('posts');
    Route::get('/loadPost/ajax', 'loadPost_ajax')->name('loadPost.ajax');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});