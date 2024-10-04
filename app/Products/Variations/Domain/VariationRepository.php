<?php

namespace App\Products\Variations\Domain;

use App\Products\Variations\Infra\VariationModel;
use Illuminate\Database\Eloquent\Collection;


interface VariationRepository
{
    /**
     * @return VariationModel[]|Collection
     */
    public function getaAll(): Collection;
    public function find(int $id): VariationModel;
    public function create(array $data): VariationModel;
    public function update(int $id, array $data): VariationModel;
    public function delete(int $id): bool;
}