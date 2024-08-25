<?php

namespace App\Product\Controller;

use App\Http\Controllers\BaseController;
use App\Product\DTO\ProductDto;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $prod = new ProductDto();
        return response()->json($this->service->create($prod->toProductModel($request)), 201);
    }

    public function getById(Request $request)
    {
        return response()->json($this->service->getById($request->id));
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