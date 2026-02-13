<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('frontend.layouts.partials.header', function ($view) {
            $categories = Category::where('status', 1)->orderBy('priority', 'asc')->get();
            $view->with('categories', $categories);
        });
    }
}
