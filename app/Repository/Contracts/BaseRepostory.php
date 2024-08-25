<?php

namespace App\Repository\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepostory
{
    /**
    * @return Product[]|Collection
    */
    public function getAll(): Collection;

    public function find(int $id): Model;

    public function create(Model $data): Model;

    public function update(int $id, Model $data): Model;

    public function delete(int $id): bool;
}