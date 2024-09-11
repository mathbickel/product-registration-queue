<?php

namespace App\Products\Domain;

class ProductData implements Product
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $category;

    public function __construct(int $id, string $name, string $description, float $price, string $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
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