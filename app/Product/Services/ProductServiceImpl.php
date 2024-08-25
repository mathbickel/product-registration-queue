<?php

namespace App\Product\Services;

use App\Models\Product;
use App\Product\Repository\ProductRepository;
use App\Product\Services\ProductService as ServicesProductService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductServiceImpl extends ServicesProductService
{
    public function __construct(
        protected ProductRepository $repository
    ){ 
    }

    /**
    * @return Product[]|Collection
    */
    public function getaAll(): Collection
    {
        return $this->repository->getAll();   
    }

    public function getById(int $id): Model
    {
        return $this->repository->find($id);
    }
    public function create(array $product): Product
    {
        return $this->repository->create($product);
    }

    public function update(int $id, array $product): Product
    {
        return $this->repository->update($id, $product);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}