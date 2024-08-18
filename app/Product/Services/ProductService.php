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

    public function register(Product $product)
    {
        $this->repository->create($product);
    }

    public function update(int $id, Model $model)
    {
        //TODO
    }

    public function delete(int $id)
    {
        //TODO
    }
}