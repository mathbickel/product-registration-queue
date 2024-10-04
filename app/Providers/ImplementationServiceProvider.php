<?php

namespace App\Providers;

use App\Products\Domain\ProductService;
use App\Products\Implementation\ProductServiceImpl;
use App\Products\Variations\Domain\VariationService;
use App\Products\Variations\Implementation\VariationServiceImpl;
use Carbon\Laravel\ServiceProvider;


class ImplementationServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductService::class, ProductServiceImpl::class);
        $this->app->bind(VariationService::class, VariationServiceImpl::class);
    }
}