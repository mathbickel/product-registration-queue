<?php

namespace App\Http\Controllers;

use App\Product\DTO\ProductDto;
use Illuminate\Http\Request;
use App\Product\Services\ProductServiceImpl;

class BaseController extends Controller
{
    public function __construct(
        protected ProductServiceImpl $service  
    ){
    }

    public function index()
    {
        return response()->json($this->service->getaAll());
    }

    public function show(Request $request)
    {
        return response()->json($this->service->getById($request->id));
    }

    public function store(Request $request)
    {
        $prod = new ProductDto();
        return response()->json($this->service->create($prod->toProductModel($request)), 201);
    }

    public function update(Request $request, int $id)
    {
        $prod = $this->service->getById($id);
        $prod = new ProductDto();
        $res = $this->service->update($id, $prod->toProductModel($request));

        return response()->json($res);
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}
