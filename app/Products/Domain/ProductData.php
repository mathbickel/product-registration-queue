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
    protected int $variationsId;

    public function __construct(int $id, string $name, string $description, float $price, string $category, array $dimensions, int $variationsId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->dimensions = $dimensions;
        $this->variationsId = $variationsId;
    }
    
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
            'dimensions' => [
                'length' => $this->dimensions['length'],
                'width' => $this->dimensions['width'],
                'height' => $this->dimensions['height']
            ],
            'variationsId' => $this->variationsId
        ];
    }
}