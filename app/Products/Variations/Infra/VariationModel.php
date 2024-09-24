<?php

namespace App\Products\Variations\Infra;

use Illuminate\Database\Eloquent\Model;
use App\Products\Infra\ProductModel;

class VariationModel extends Model
{
    protected $table = 'variations';

    protected $fillable = [
        'product_id',
        'color',
        'size',
        'weight',
        'balance',
        'dimensions'
    ];

    protected $casts = [
        'product_id' => 'integer',
        'balance' => 'integer',
        'dimensions' => 'array'
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}