<?php

namespace App\Products\Variations\Domain;

use Illuminate\Database\Eloquent\Collection;
use App\Products\Variations\Domain\VariationData;
interface VariationService
{
    /**
     * @return VariationData[]|Collection
     */
    public function getaAll(): Collection;
    public function getById(int $id): VariationData;
    public function create(array $variation): VariationData;
    public function update(int $id, array $variation): VariationData;
    public function delete(int $id): bool;
}