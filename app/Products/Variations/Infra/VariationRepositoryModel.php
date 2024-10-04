<?php

namespace App\Products\Variations\Infra;

use App\Products\Variations\Domain\VariationRepository;
use App\Products\Variations\Infra\VariationModel;
use Illuminate\Database\Eloquent\Collection;

class VariationRepositoryModel implements VariationRepository
{
    public function __construct(
        protected VariationModel $model
    ){
    }

    /**
    * @return VariationModel[]|Collection
    */
    public function getaAll(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): VariationModel
    {
        return $this->model->find($id);
    }

    public function create(array $data): VariationModel
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): VariationModel
    {
        $record = $this->find($id);
        $record->update($data);
        return $this->find($id);
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }
}