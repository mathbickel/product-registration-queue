<?php

namespace App\Products\Domain;

class ProductData implements Product
{
    protected int $id;
    protected string $name;
    protected ?string $description;
    protected float $price;
    protected ?string $category;
    protected ?array $dimensions;

    public function __construct(int $id, string $name, ?string $description, float $price, ?string $category, ?array $dimensions)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description ?? null;
        $this->price = $price;
        $this->category = $category ?? null;
        $this->dimensions = $dimensions;
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
                'length' => $this->dimensions[0]['length'],
                'width' => $this->dimensions[0]['width'],
                'height' => $this->dimensions[0]['height']
            ]
        ];
    }
}