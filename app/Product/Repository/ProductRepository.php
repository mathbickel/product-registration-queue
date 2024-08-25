<?php

namespace App\Product\Repository;

use App\Models\Product;
use App\Product\Repository\Contracts\ProductRepository as ContractsProductRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ContractsProductRepository
{
    public function __construct(
        protected Product $model
    ){
    }

    /**
    * @return Product[]|Collection
    */
    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): Product
    {
        return $this->model->find($id);
    }

    public function create(Model $product): Product
    {
        return $this->model->create($product->toArray());
    }

    public function update(int $id, Model $data): Product
    {
        $record = $this->find($id);
        $this->model->update($data->toArray());
        return $record;
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }
}