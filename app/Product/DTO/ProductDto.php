<?php

namespace App\Product\DTO;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDto
{
    public $name;
    public $description;
    public $price;
    public $balance;

    public function toProductModel(Request $request): Product
    {
        $prod = $request->all();
        return new Product($prod['name'], $prod['description'], $prod['price'], $prod['balance']);
    }
}