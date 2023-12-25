<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*',function ($view){
            $view->with('categoriess', Category::where('status',1)->get(['id','name']));
        });

        View::composer('*',function ($view){
            $view->with('categoriesss', Category::where('status',1)->orderBy('id', 'desc')->take(4)->get(['id','name']));
        });
        View::composer('*',function ($view){
            $view->with('blogss', Blog::where('status',1)->orderBy('id', 'desc')->take(4)->get());
        });
        View::composer('*',function ($view){
            $view->with('blogsss', Blog::where('status',1)->orderBy('id', 'desc')->skip(3)->take(3)->get());
        });

    }
}
