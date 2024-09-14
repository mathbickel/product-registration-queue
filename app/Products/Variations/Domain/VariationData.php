<?php

namespace App\Products\Variations\Domain;

class VariationData
{
    protected int $id;
    protected int $productId;
    protected string $color;
    protected string $size;
    protected float $weight;
    protected int $balance;
    protected array $dimensions;
    
    public function __construct(int $id, int $productId, string $color, string $size, float $weight, int $balance, array $dimensions)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->color = $color;
        $this->size = $size;
        $this->balance = $balance;
        $this->weight = $weight;
        $this->dimensions = $dimensions;
    }
    
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->productId,
            'color' => $this->color,
            'size' => $this->size,
            'balance' => $this->balance,
            'weight' => $this->weight,
            'dimensions' => [
                'length' => $this->dimensions['length'],
                'width' => $this->dimensions['width'],
                'height' => $this->dimensions['height']
            ]
        ];
    }
}