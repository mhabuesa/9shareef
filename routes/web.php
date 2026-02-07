<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::middleware('auth')->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // Category Routes
    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/status/{id}', 'updateStatus')->name('status.update');
        Route::post('/update', 'updateAjax')->name('update');
    });

    // Banner Routes
    Route::controller(BannerController::class)->name('banner.')->prefix('banner')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/status/{id}', 'updateStatus')->name('status.update');
        Route::post('/update', 'updateAjax')->name('update');
    });


    // Extra Routes of resource controllers can be defined here
    // Profile Routes
    Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {
        Route::post('/profile_password/{profile}', 'profile_password')->name('password');
    });

    // Post Routes
    Route::controller(PostController::class)->name('posts.')->prefix('post')->group(function () {
        Route::get('/trash', 'trash')->name('trash');
        Route::get('/restore/{id}', 'restore')->name('restore');
        Route::get('/permanentlydelete/{id}', 'permanentlydelete')->name('permanentlydelete');
        Route::get('/getList/ajax', 'getList')->name('getList.ajax');
        Route::delete('/gallery/delete', 'deleteGallery')->name('gallery.delete');
        Route::get('/featured', 'featured')->name('featured');
        Route::get('/featuredUpdate/{id}', 'featuredUpdate')->name('featuredUpdate');
        Route::get('/hotUpdate/{id}', 'hotUpdate')->name('hotUpdate');
    });

    // Resource Controller
    Route::resources([
        'profile' => ProfileController::class,
        'posts' => PostController::class,
    ]);
});





require __DIR__ . '/auth.php';
require __DIR__ . '/frontend.php';
