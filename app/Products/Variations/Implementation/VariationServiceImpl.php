<?php

namespace App\Products\Variations\Implementation;

use App\Products\Variations\Domain\VariationData;
use App\Products\Variations\Domain\VariationRepository;
use App\Products\Variations\Domain\VariationService;
use App\Products\Variations\Infra\Adapters\VariationDto;
use Illuminate\Database\Eloquent\Collection;

class VariationServiceImpl implements VariationService
{
    public function __construct(
        protected VariationRepository $repository
    ){
    }

    /**
    * @return VariationData[]|Collection
    */
    public function getaAll(): Collection
    {
        return $this->repository->getaAll();
    }    

    public function getById(int $id): VariationData
    {
        $variation = $this->repository->find($id);
        $getById = VariationDto::toVariationData($variation);
        return $getById;
        
    }

    public function create(array $variation): VariationData
    {
        $variation = $this->repository->create($variation);
        $created = VariationDto::toVariationData($variation);
        return $created;

    }

    public function update(int $id, array $variation): VariationData
    {
        $variation = $this->repository->update($id, $variation);
        $updated = VariationDto::toVariationData($variation);
        return $updated;
    }

    public function delete(int $id): bool
    {
       return $this->repository->delete($id);
    }
}