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
    
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }   
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setCategories(string $category): void
    {
        $this->category = $category;
    }
    public function getCategories(): string
    {
        return $this->category;
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