<?php

namespace Mralgorithm\LaravelPagination;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Mralgorithm\LaravelPagination\Gh_class;

class laravelPaginationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/public' => public_path('laravel-pagination/'),
            __DIR__. '/config' => config_path('/')
        ],'mralgorithm-laravel-pagination');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $laravelPagination = new Gh_class();
            $view->with(['laravelPagination' => $laravelPagination]);
        });
    }
}
