<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

interface BaseServiceProvider
{
    public function getaAll();
    public function register(Model $model);
    public function update(int $id, Model $model);
    public function delete(int $id);
}