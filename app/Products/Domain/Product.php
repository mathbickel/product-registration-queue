<?php

namespace App\Products\Domain;

interface Product
{
    public function toArray(): array;
}