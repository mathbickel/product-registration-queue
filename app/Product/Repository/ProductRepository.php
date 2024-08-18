<?php

namespace App\Product\Repository;

use App\Product\Repository\Contracts\ProductRepository as ContractsProductRepository;
use Illuminate\Database\Eloquent\Model;
class ProductRepository implements ContractsProductRepository
{
    protected $model;
    public function __construct(Model $model)
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

    public function create(Model $product)
    {
        return $this->model->create($product);
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