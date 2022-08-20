<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Home;
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
        view()->composer(
            'layouts.backendapp',
            function ($view) {
                $view->with('datas', Home::all());
            }
        );
    }
}
