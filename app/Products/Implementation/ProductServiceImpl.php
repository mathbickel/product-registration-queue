<?php

namespace App\Products\Implementation;

use App\Products\Domain\ProductRepository;
use App\Products\Domain\ProductService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductServiceImpl implements ProductService
{
    public function __construct(
        protected ProductRepository $repository
    ){ 
    }

    /**
    * @return ProductData[]|Collection
    */
    public function getaAll(): Collection
    {
        return $this->repository->getAll();   
    }

    public function getById(int $id): Model
    {
        return $this->repository->find($id);
    }
    public function create(array $product): Model
    {
        return $this->repository->create($product);
    }

    public function update(int $id, array $product): Model
    {
        return $this->repository->update($id, $product);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}