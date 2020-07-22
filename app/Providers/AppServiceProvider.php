<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.blog_right_navbar',function($view)
        {
            $view->with('articles',\App\Article::articles());
         
        });
        view()->composer('layouts.blog_right_navbar',function($view)
        {
            $view->with('blog_categories',\App\Blog::blog_categories());
         
        });
    }
}
