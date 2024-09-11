<?php

namespace App\Products\Domain;

interface Product
{
    public function store(array $data);
    public function getById(int $id);
    public function getAll(): array;
    public function update(int $id, array $data);
    public function delete(int $id): void;
}