<?php

namespace App\Providers;

use App\Products\Domain\ProductService;
use Carbon\Laravel\ServiceProvider;
use App\Products\Implementation\ProductServiceImpl;

class ImplementationServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductService::class, ProductServiceImpl::class);
    }
}