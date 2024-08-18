<?php

namespace App\Product\Controller;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Product\Services\ProductServiceImpl;
use App\Product\DTO\ProductDto;

class ProductController extends BaseController
{
    protected $service;

    public function __construct(Request $request)
    {
        $product = new ProductDto();
        $this->service = new ProductServiceImpl($product->toProductModel($request));
        parent::__construct($this->service);
    }

    public function index()
    {
        $prod = $this->service->getaAll();
        return response()->json($prod);
    }

    public function show(Request $request)
    {
        return response()->json(Product::find($request->id));
    }
}