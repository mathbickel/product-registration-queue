<?php

namespace App\Products\Domain;

class Product extends ProductData
{
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'price' => $this->getPrice(),
            'category' => $this->getCategory(),
            'dimensions' => $this->getDimensions()
        ];
    }

    public function toString(): string
    {
        return json_encode($this->toArray());
    }
}