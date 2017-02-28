<?php

namespace Assignment2\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //let's listen for when layouts.sidebar is loaded. When it's loaded, call a call-back function
      view()->composer('layouts.sidebar', function($view)
      { //add variable to be used by layouts.sidebar:
	$view->with('archives', \Assignment2\Post::archives()); //this is why archives() is static
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
