<?php

namespace App\Repository;

use App\Repository\Contracts\IBaseRepostory;
use Illuminate\Database\Eloquent\Model;
abstract class BaseRepostory implements IBaseRepostory
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id): Model
    {
        return $this->model->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }
}