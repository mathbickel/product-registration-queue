<?php

namespace App\Products\Domain;

class ProductData implements Product
{
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $category;

    public function __construct(string $name, string $description, float $price, string $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }
    
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category
        ];
    }
}