<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseServiceProvider
{
    public function getaAll(): Collection;
    public function getById(int $id): Model;
    public function create(array $model): Model;
    public function update(int $id, array $model): Model;
    public function delete(int $id): bool;
}