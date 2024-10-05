<?php

namespace App\Products\Domain;

abstract class ProductData
{
    protected int $id;
    protected string $name;
    protected ?string $description;
    protected float $price;
    protected ?string $category;
    protected ?array $dimensions;

    public function __construct(int $id, string $name, ?string $description, float $price, ?string $category, ?array $dimensions)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description ?? null;
        $this->price = $price;
        $this->category = $category ?? null;
        $this->dimensions = $dimensions;
    }
  
    abstract public function toArray(): array;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    public function setDimensions(?array $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    
}