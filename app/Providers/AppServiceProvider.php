<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Route;

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
        view()->composer('*',function($settings){
            $settings->with('url', Route::currentRouteName());

            if (!session()->has('popup'))
            {
                view()->share('visit', 1);
            }
            session()->put('popup' , 1);
        });
        // Schema::defaultStringLength(191);
    }
}
