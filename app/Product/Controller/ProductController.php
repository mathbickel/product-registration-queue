<?php

namespace App\Product\Controller;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Product\Services\ProductServiceImpl;

class ProductController extends BaseController
{
    public function __construct (
        protected ProductServiceImpl $service
    ) {
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