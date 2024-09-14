<?php

namespace App\Providers;

use App\Products\Domain\ProductRepository;
use App\Products\Infra\ProductRepositoryModel;
use Carbon\Laravel\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepository::class, ProductRepositoryModel::class);
    }
}