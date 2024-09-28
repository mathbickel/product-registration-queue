<?php

namespace App\Products\Implementation;

use App\Products\Infra\Adapters\ProductDto;
use App\Products\Domain\ProductData;
use App\Products\Domain\ProductRepository;
use App\Products\Domain\ProductService;
use Illuminate\Database\Eloquent\Collection;

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


    public function getById(int $id): ProductData
    {
        $prod = $this->repository->find($id);
        $productById = ProductDto::toProductData($prod->toArray());
        return $productById;
    }
    public function create(array $product): ProductData
    {
        $prod = $this->repository->create(ProductDto::toProductModel($product));
        $created = ProductDto::toProductData($prod->toArray());
        return $created;
    }

    public function update(int $id, array $product): ProductData
    {
        $prod = $this->repository->update($id, $product);
        $updated = ProductDto::toProductData($prod->toArray());
        return $updated;
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}