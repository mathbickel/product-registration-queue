<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

interface BaseServiceProvider
{
    public function getaAll();
    public function getById(int $id);
    public function create(Model $model);
    public function update(int $id, Model $model);
    public function delete(int $id);
}