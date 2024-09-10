<?php

namespace App\Products\Domain;

use App\Products\Domain\ProductData;

interface IProduct
{
    public function store(array $data): ProductData;
    public function getById(int $id): ProductData;
    public function getAll(): array;
    public function update(int $id, array $data): ProductData;
    public function delete(int $id): void;
}