<?php

namespace App\Products\Infra;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'category',
    ];

    protected $casts = [
        'price' => 'float'
    ];
}