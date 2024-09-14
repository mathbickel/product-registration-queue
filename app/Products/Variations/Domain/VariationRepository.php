<?php

namespace App\Products\Variations\Domain;

use Illuminate\Database\Eloquent\Collection;

interface VariationRepository
{
    /**
     * @return VariationData[]|Collection
     */
    public function getaAll(): Collection;
    public function find(int $id): VariationData;
    public function create(array $data): VariationData;
    public function update(int $id, array $data): VariationData;
    public function delete(int $id): bool;
}