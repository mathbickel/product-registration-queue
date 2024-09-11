<?php

abstract class ProductModel
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
}