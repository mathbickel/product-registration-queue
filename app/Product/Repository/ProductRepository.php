<?php

namespace App\Product\Repository;

use App\Product\Repository\Contracts\ProductRepository as ContractsProductRepository;
use App\Models\Product;
class ProductRepository implements ContractsProductRepository
{
    protected $model;
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    public function delete(int $id)
    {
        $record = $this->find($id);
        return $record->delete();
    }
}