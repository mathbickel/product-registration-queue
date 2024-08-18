<?php

namespace App\Product\Services;

use App\Product\ProductService;
use App\Product\DTO\ProductDto;
use App\Models\Product;
class ProductServiceImpl implements ProductService
{
    public function getAll()
    {
        $prod = new Product();
        return $prod->getAll();
    }
    public function createProduct(ProductDto $data)
    {
        // TODO: Implement createProduct() method.
    }
}