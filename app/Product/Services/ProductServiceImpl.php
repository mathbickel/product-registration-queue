<?php

namespace App\Product\Services;

use App\Models\Product;
use App\Product\Repository\ProductRepository;
use App\Product\Services\ProductService as ServicesProductService;
use Illuminate\Database\Eloquent\Model;

class ProductServiceImpl extends ServicesProductService
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

    public function getById(int $id)
    {
        $this->repository->find($id);
    }

    public function create(Model $product)
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