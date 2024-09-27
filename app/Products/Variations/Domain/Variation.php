<?php

namespace App\Products\Variations\Domain;

class Variation extends VariationData
{
    public function __construct(array $variation)
    {
        parent::__construct(
            $variation['id'],
            $variation['product_id'],
            $variation['color'],
            $variation['size'],
            $variation['weight'],
            $variation['balance'],
            $variation['dimensions']
        );
    }

    public function getVariations(): array
    {
        return [
            "id" => $this->getId(),
            "product_id" => $this->getProductId(),
            "color" => $this->getColor(),
            "size" => $this->getSize(),
            "weight" => $this->getWeight(),
            "balance" => $this->getBalance(),
            "dimensions" => $this->getDimensions(),
        ];
    }
}