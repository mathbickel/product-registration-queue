<?php

namespace App\Product\Services;

use App\Models\Product;
use App\Product\ProductService;
use App\Product\Repository\ProductRepository;
use Illuminate\Database\Eloquent\Model;

class ProductServiceImpl extends ProductService
{
    protected $repository;
    public function __construct(Product $product)
    {
        $this->repository = new ProductRepository($product);
    }

    public function getaAll()
    {
        $this->repository->getAll();   
    }

    public function register(Model $product)
    {
        $this->repository->create($product);
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