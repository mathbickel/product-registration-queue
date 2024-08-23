<?php

namespace App\Product\Repository;

use App\Product\Repository\Contracts\ProductRepository as ContractsProductRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ContractsProductRepository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): Model
    {
        return $this->model->find($id);
    }

    public function create(Model $product): Model
    {
        return $this->model->create($product);
    }

    public function update(int $id, array $data): bool
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }
}