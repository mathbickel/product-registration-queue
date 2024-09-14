<?php

namespace App\Products\Variations\Infra\Adapters;

use App\Products\Variations\Domain\VariationData;
use App\Products\Variations\Infra\VariationModel;

class VariationDto
{
    public static function toVariationModel(array $variation): array
    {
        $variation = new VariationModel($variation);
        return $variation->toArray();
            
    }

    public static function toVariationData(array $variation): VariationData
    {
        return new VariationData(
            $variation['id'],
            $variation['product_id'],
            $variation['color'],
            $variation['size'],
            $variation['weight'],
            $variation['balance'],
            $variation['dimensions']
        );
    }
}