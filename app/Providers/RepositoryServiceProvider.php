<?php

namespace App\Providers;

use App\Products\Domain\ProductRepository;
use App\Products\Infra\ProductRepositoryModel;
use App\Products\Variations\Domain\VariationRepository;
use Carbon\Laravel\ServiceProvider;
use App\Products\Variations\Infra\VariationRepositoryModel;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepository::class, ProductRepositoryModel::class);
        $this->app->bind(VariationRepository::class, VariationRepositoryModel::class);
    }
}