<?php

namespace App\Product\DTO;

use App\Products\Domain\ProductData;

class ProductDto
{
    public int $id;
    public string $name;
    public string $description;
    public float $price;
    public string $category;

    public static function toProductModel(array $product): array
    {
        return new ProductData($product['id'], $product['name'], $product['description'], $product['price'], $product['category'])->toArray();
    }
}