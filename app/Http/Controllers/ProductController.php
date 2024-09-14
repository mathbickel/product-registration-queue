<?php

namespace App\Product\Controller;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Products\Domain\ProductService;

class ProductController extends BaseController
{
    public function __construct (
        protected ProductService $service
    ) {
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        $prod = $this->service->getaAll();
        return response()->json($prod);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $prod = $this->service->create($request->all());
        return response()->json($prod->toArray(), 201);
    }

    public function getById(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->service->getById($request->id));
    }

    public function update(Request $request, int $id): \Illuminate\Http\JsonResponse
    {
        $res = $this->service->update($id, $request->all());
        return response()->json($res);
    }

    public function destroy(int $id): \Illuminate\Http\JsonResponse
    {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}