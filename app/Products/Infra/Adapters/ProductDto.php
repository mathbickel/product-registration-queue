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

    public static function toProductData(array $products): ProductData
    {
        return new ProductData(
            $products['id'], 
            $products['name'], 
            $products['description'], 
            $products['price'],
            $products['category'],
            $products['dimensions']
        );
    }
}