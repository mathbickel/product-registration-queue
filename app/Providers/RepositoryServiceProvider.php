<?php
namespace App\Providers;

use App\Product\Repository\Contracts\ProductRepository;
use App\Product\Repository\ProductRepository as ProductRepositoyConcrete;
use Carbon\Laravel\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ProductRepository::class, ProductRepositoyConcrete::class);
    }
}