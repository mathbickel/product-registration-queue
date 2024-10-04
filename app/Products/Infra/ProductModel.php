<?php

namespace App\Products\Infra;

use Illuminate\Database\Eloquent\Model;
use App\Products\Variations\Infra\VariationModel;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'category',
        'dimensions',
        'variation_id'
    ];

    protected $casts = [
        'price' => 'float',
        'dimensions' => 'array',
        'variation_id' => 'array'
    ];

    public function variations()
    {
        return $this->hasMany(VariationModel::class, 'product_id', 'id')->orderBy('id', 'asc');
    }
}