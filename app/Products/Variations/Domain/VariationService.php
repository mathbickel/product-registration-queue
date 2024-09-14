<?php

namespace App\Products\Variations\Domain;

use Illuminate\Database\Eloquent\Collection;
interface VariationService
{
    /**
     * @return VariationData[]|Collection
     */
    public function getaAll(): Collection;
    public function getById(int $id): VariationData;
    public function create(array $variation): VariationData;
    public function update(int $id, array $variation): VariationData;
    public function delete(int $id): void;
}