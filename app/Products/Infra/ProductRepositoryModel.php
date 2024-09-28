<?php

namespace App\Products\Infra;

use App\Products\Domain\ProductRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Products\Infra\ProductModel;

class ProductRepositoryModel implements ProductRepository
{
    public function __construct(
        protected ProductModel $product
    ){
        $this->product = $product;
    }

    /**
    * @return ProductModel[]|Collection
    */
    public function getAll(): Collection
    {
        return $this->product->with('variations')->get();
    }

    public function find(int $id): ProductModel
    {
        return $this->product->find($id);
    }

    public function create(array $product): ProductModel
    {
        return $this->product->create($product);
    }

    public function update(int $id, array $data): ProductModel
    {
        $record = $this->find($id);
        $record->update($data);
        return $this->find($id);
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }
}