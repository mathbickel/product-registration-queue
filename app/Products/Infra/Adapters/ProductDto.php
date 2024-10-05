<?php

namespace App\Products\Infra\Adapters;

use App\Products\Domain\ProductData;
use App\Products\Infra\ProductModel;

class ProductDto
{
    public static function toProductModel(array $product): array
    {
        $prod = new ProductModel($product);
        return $prod->toArray();
    }

    public static function toProductData(ProductModel $products): ProductData
    {
        return new ProductData(
            $products->id, 
            $products->name, 
            $products->description, 
            $products->price, 
            $products->category, 
            $products->dimensions
        );
    }
}