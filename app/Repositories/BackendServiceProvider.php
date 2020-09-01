<?php
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
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
}


?>
