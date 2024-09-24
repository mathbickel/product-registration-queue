<?php

namespace App\Products\Variations\Domain;

abstract class VariationData
{
    protected int $id;
    protected int $productId;
    protected string $color;
    protected string $size;
    protected float $weight;
    protected int $balance;
    protected array $dimensions;
    
    public function __construct(int $id, int $productId, string $color, string $size, float $weight, int $balance, array $dimensions)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->color = $color;
        $this->size = $size;
        $this->balance = $balance;
        $this->weight = $weight;
        $this->dimensions = $dimensions;
    }

    abstract protected function getVariations(): array;

    protected function getId(): int
    {
        return $this->id;
    }
    
    protected function getProductId(): int
    {
        return $this->productId ?? null;
    }

    protected function getColor(): string
    {
        return $this->color ?? null;
    }

    protected function getSize(): string
    {
        return $this->size ?? null;
    }

    protected function getBalance(): int
    {
        return $this->balance ?? null;
    }

    protected function getWeight(): float
    {
        return $this->weight ?? null;
    }

    protected function getDimensions(): array
    {
        return $this->dimensions ?? null;
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