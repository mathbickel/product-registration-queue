<?php

namespace App\Products\Infra;

use App\Products\Domain\ProductRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Products\Infra\ProductModel;

class ProductRepositoryModel implements ProductRepository
{
    public function __construct(
        protected ProductModel $model
    ){
        $this->model = $model;
    }

    /**
    * @return ProductModel[]|Collection
    */
    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): ProductModel
    {
        return $this->model->find($id);
    }

    public function create(array $product): ProductModel
    {
        return $this->model->create($product);
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