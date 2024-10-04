<?php

namespace App\Products\Variations\Domain;

class Variation extends VariationData
{
    public function __construct(array $variation)
    {
        parent::__construct(
            $variation['product_id'],
            $variation['color'],
            $variation['size'],
            $variation['weight'],
            $variation['balance'],
            $variation['dimensions']
        );
    }
}