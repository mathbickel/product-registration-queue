<?php

namespace App\Products\Domain;

use App\Products\Variations\Domain\Variation;

class ProductData implements Product
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $category;
    protected array $dimensions;
    protected array $variations;

    public function __construct(int $id, string $name, string $description, float $price, string $category, array $dimensions)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description ?? null;
        $this->price = $price;
        $this->category = $category ?? null;
        $this->dimensions = $dimensions;
        $this->variations = [];
    }

    public function addVariation(Variation $variation): void
    {
        $this->variations[] = $variation;
    }
    
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description ?? null,
            'price' => $this->price,
            'category' => $this->category ?? null,
            'dimensions' => [
                'length' => $this->dimensions['length'],
                'width' => $this->dimensions['width'],
                'height' => $this->dimensions['height']
            ],
            'variations' => array_map(fn (Variation $variation) => $variation->getVariations(), $this->variations)
        ];
    }

    public static function fromArray(array $data): self
    {
        dd($data);
        $variations = array_map(function ($variationData) {
            return new Variation($variationData);
        }, $data['variations'] ?? []);

        return new self(
            $data['id'],
            $data['name'],
            $data['description'],
            $data['price'],
            $data['category'],
            $data['dimensions'],
            $variations
        );
    }
}