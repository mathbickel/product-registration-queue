<?php

namespace App\Products\Domain;

use App\Services\BaseServiceProvider;
use App\Product\Repository\ProductRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Products\Domain\ProductData;

abstract class ProductService implements BaseServiceProvider
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
    public function create(array $product): ProductData
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