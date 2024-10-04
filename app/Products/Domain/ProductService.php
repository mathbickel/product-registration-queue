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
    public function create(array $product): ProductData;
    public function update(int $id, array $product): ProductData;
    public function delete(int $id): bool;
}