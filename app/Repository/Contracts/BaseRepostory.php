<?php

namespace App\Repository\Contracts;
use Illuminate\Database\Eloquent\Model;

interface BaseRepostory
{
    public function all();

    public function find(int $id);

    public function create(Model $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}