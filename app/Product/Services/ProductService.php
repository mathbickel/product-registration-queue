<?php

namespace App\Product;

use App\Services\BaseServiceProvider;
use App\Models\Product;
use App\Product\Repository\ProductRepository;
use Illuminate\Database\Eloquent\Model;

abstract class ProductService implements BaseServiceProvider
{
    protected $repository;
    public function __construct(Product $product)
    {
        $this->repository = new ProductRepository($product);
    }

    public function getaAll()
    {
        $this->repository->all();   
    }

    public function register(Model $product)
    {
        if ($product instanceof Product) return $this->repository->create($product);
        return;
    }

    public function update(int $id, Model $product)
    {
        //TODO
    }

    public function delete(int $id)
    {
        //TODO
    }
}