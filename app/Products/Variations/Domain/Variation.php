<?php

namespace App\Products\Variations\Domain;

class Variation extends VariationData
{
    public function __construct(int $id, int $productId, ?string $color, ?string $size, ?float $weight, int $balance, ?array $dimensions)
    {
        parent::__construct(
            $id,
            $productId,
            $color,
            $size,
            $weight,
            $balance,
            $dimensions
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'product_id' => $this->getProductId(),
            'color' => $this->getColor(),
            'size' => $this->getSize(),
            'balance' => $this->getBalance(),
            'weight' => $this->getWeight(),
            'dimensions' => $this->getDimensions()
        ];
    }
}