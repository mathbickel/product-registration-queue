<?php

namespace App\Product\DTO;

use App\Products\Domain\ProductData;

class ProductDto
{
    public string $name;
    public string $description;
    public float $price;
    public string $category;

    public static function toProductModel(array $product): array
    {
        $prod = new ProductData($product['name'], $product['description'], $product['price'], $product['category']);
        return $prod->toArray();
    }
}