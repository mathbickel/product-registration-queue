<?php

namespace App\Products\Infra\Adapters;

use App\Products\Domain\ProductData;
use App\Products\Infra\ProductModel;

class ProductDto
{
    public string $name;
    public string $description;
    public float $price;
    public string $category;

    public static function toProductModel(array $product): array
    {
        $prod = new ProductModel($product);
        return $prod->toArray();
    }

    public static function toProductData(array $product): ProductData
    {
        return new ProductData(
            $product['id'],
            $product['name'], 
            $product['description'] ?? null, 
            $product['price'],
            $product['category'] ?? null,
            $product['dimensions'][0],
            $product['variationsId'] ?? null
        );
    }
}