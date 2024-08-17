<?php

namespace App\Product;

use App\Product\DTO\ProductDto;
interface ProductService
{
    public function createProduct(ProductDto $productDto);
}