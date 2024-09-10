<?php

use App\Products\Domain\IProduct;
use App\Products\Domain\ProductData;

class Product extends ProductData implements IProduct
{
    public function __construct(ProductData $productData)
    {
        parent::__construct($productData);
    }

    public function store(array $data): ProductData
    {
        throw new \Exception('Method not implemented');
    }

    public function getById(int $id): ProductData
    {
        throw new \Exception('Method not implemented');
    }

    public function getAll(): array
    {
        return [];
    }   

    public function update(int $id, array $data): ProductData
    {
        throw new \Exception('Method not implemented');
    }

    public function delete(int $id): void
    {
        throw new \Exception('Method not implemented');
    }
}