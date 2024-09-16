<?php

namespace App\Products\Domain;

class ProductData implements Product
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $category;
    protected array $dimensions;
    protected int $variation_id;

    public function __construct(int $id, string $name, string $description, float $price, string $category, array $dimensions, int $variation_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description ?? null;
        $this->price = $price;
        $this->category = $category ?? null;
        $this->dimensions = $dimensions;
        $this->variation_id = $variation_id ?? null;
    }
    
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description ?? null,
            'price' => $this->price,
            'category' => $this->category ?? null,
            'dimensions' => [
                'length' => $this->dimensions['length'],
                'width' => $this->dimensions['width'],
                'height' => $this->dimensions['height']
            ],
            'variation_id' => $this->variation_id ?? null
        ];
    }
}