<?php

namespace App\Product\DTO;

use App\Models\Product;
class ProductDto
{
    public $name;
    public $description;
    public $price;
    public $balance;

    public function toArray(): Product
    {
        return new Product($this->name, $this->description, $this->price, $this->balance);
    }
}