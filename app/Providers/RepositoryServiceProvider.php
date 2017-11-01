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
        $this->app->bind(
            'LancheNinja\Repositories\ProductRepository',
            'LancheNinja\Repositories\ProductRepositoryEloquent'
        );
        $this->app->bind(
            'LancheNinja\Repositories\ClientRepository',
            'LancheNinja\Repositories\ClientRepositoryEloquent'
        );
        $this->app->bind(
            'LancheNinja\Repositories\UserRepository',
            'LancheNinja\Repositories\UserRepositoryEloquent'
        );
        $this->app->bind(
            'LancheNinja\Repositories\OrderRepository',
            'LancheNinja\Repositories\OrderRepositoryEloquent'
        );
    }
}
