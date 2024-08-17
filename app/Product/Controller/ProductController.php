<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Product;
use Illuminate\Http\Request;
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