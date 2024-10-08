<?php

namespace App\Products\Domain;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ProductRepository
{
      /**
    * @return Product[]|Collection
    */
    public function getAll(): Collection;
    public function find(int $id): Model;
    public function create(array $data): Model;
    public function update(int $id, array $data): Model;
    public function delete(int $id): bool;
}