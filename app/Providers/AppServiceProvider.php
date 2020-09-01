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
        $this->app->singleton(
            'App\Repositories\Eloquent\BaseRepositoryInterface',
            'App\Repositories\Eloquent\BaseRepository'

        );
        $this->app->singleton(
            'App\Repositories\Contracts\CategoryRepositoryInterface',
            'App\Repositories\Eloquent\CategoryRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
