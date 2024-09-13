<?php

namespace App\Products\Domain;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ProductService
{
    public function getaAll(): Collection;
    public function getById(int $id): Model;
    public function create(array $model): ProductData;
    public function update(int $id, array $model): Model;
    public function delete(int $id): bool;
}