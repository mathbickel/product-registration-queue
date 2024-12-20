<?php

namespace App\Products\Variations\Domain;

abstract class VariationData
{
    protected int $id;
    protected int $productId;
    protected ?string $color;
    protected ?string $size;
    protected ?float $weight;
    protected int $balance;
    protected ?array $dimensions;
    
    public function __construct(int $id, int $productId, ?string $color, ?string $size, ?float $weight, int $balance, ?array $dimensions)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->color = $color ?? null;
        $this->size = $size ?? null;
        $this->balance = $balance;
        $this->weight = $weight ?? null;
        $this->dimensions = $dimensions ?? null;
    }

    abstract function toArray(): array;

    protected function getId(): int
    {
        return $this->id;
    }
    
    protected function getProductId(): int
    {
        return $this->productId;
    }

    protected function getColor(): ?string
    {
        return $this->color;
    }

    protected function getSize(): ?string
    {
        return $this->size ?? null;
    }

    protected function getBalance(): int
    {
        return $this->balance;
    }

    protected function getWeight(): ?float
    {
        return $this->weight;
    }

    protected function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    protected function setId(int $id): void
    {
        $this->id = $id;
    }

    protected function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    protected function setColor(string $color): void
    {
        $this->color = $color;
    }

    protected function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }

    protected function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    protected function setDimensions(array $dimensions): void
    {
        $this->dimensions = $dimensions;
    }
}