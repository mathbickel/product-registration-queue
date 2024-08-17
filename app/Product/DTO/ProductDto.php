<?php

namespace App\Product\DTO;
class ProductDto
{
    public $name;
    public $description;
    public $price;
    public $balance;

    public function __construct(string $name, string $description, float $price, int $balance)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->balance = $balance;
    }
}