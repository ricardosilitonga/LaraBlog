<?php

namespace App\Providers;

use App\Category;
use App\Post;
use App\Views\Composers\NavigationComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', NavigationComposer::class);
//        view()->composer('layouts.sidebar', function($view) {
//            $categories = Category::with(['posts' => function ($query) {
//                $query->published();
//            }])->orderBy('title', 'asc')->get();
//
//            return $view->with('categories', $categories);
//        });
//
//        view()->composer('layouts.sidebar', function($view) {
//            $popular_posts = Post::published()->popular()->take(3)->get();
//            return $view->with('popular_posts', $popular_posts);
//        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
