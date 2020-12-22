<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\ProfileComposer;

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
        $movieList = [
            'Badla',
            'ABCD',
            'The Matrix',
            'Pirates of the Carribean',
            'brothers',
        ];

        $lastMovie = end($movieList);

        View::composer('dashboard', function ($view) use ($lastMovie) {
            $view->with('lastMovie', $lastMovie);
        });

        View::composer('profile', ProfileComposer::class);

    }
}
