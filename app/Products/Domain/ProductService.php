<?php

namespace App\Products\Domain;

use Illuminate\Database\Eloquent\Collection;

interface ProductService
{
    /**
    * @return ProductData[]|Collection
    */
    public function getaAll(): Collection;
    public function getById(int $id): ProductData;
    public function create(array $model): ProductData;
    public function update(int $id, array $model): ProductData;
    public function delete(int $id): bool;
}