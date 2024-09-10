<?php

namespace App\Products\Infra;

use App\Models\Product;
use App\Product\Repository\Contracts\ProductRepository as ContractsProductRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ContractsProductRepository
{
    public function __construct(
        protected Model $model
    ){
    }

    /**
    * @return Product[]|Collection
    */
    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): Model
    {
        return $this->model->find($id);
    }

    public function create(array $product): Model
    {
        return $this->model->create($product);
    }

    public function update(int $id, array $data): Model
    {
        $record = $this->find($id);
        $record->update($data);
        return $record;
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }
}