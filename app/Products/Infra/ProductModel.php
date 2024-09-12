<?php

namespace App\Products\Infra;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    // Define the fields that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
    ];

    protected $casts = [
        'price' => 'float'
    ];
}