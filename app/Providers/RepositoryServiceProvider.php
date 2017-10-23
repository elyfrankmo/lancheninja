<?php

namespace LancheNinja\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'LancheNinja\Repositories\CategoryRepository',
            'LancheNinja\Repositories\CategoryRepositoryEloquent'
        );
    }
}