<?php

namespace App\Products\Variations\Domain;

class VariationData
{
    protected int $id;
    protected string $color;
    protected string $size;
    protected int $balance;
    protected array $dimensions;
    
    public function __construct(int $id, string $color, string $size, int $balance, array $dimensions)
    {
        $this->id = $id;
        $this->color = $color;
        $this->size = $size;
        $this->balance = $balance;
        $this->dimensions = $dimensions;
    }
    
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'color' => $this->color,
            'size' => $this->size,
            'balance' => $this->balance,
            'dimensions' => [
                $this->dimensions
            ]
        ];
    }
}