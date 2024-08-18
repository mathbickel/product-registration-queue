<?php

namespace App\Product\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public function __construct()
    {
        parent::__construct(Product::class);
    }

    public function index()
    {
        return response()->json(Product::all());
    }

    public function show(Request $request)
    {
        return response()->json(Product::find($request->id));
    }
}