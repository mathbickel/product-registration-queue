<?php

namespace App\Product\Controller;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Products\Implementation\ProductServiceImpl;

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
        $prod = $this->service->create($request->all());
        return response()->json($prod->toArray(), 201);
    }

    public function getById(Request $request)
    {
        return response()->json($this->service->getById($request->id));
    }

    public function update(Request $request, int $id)
    {
        $res = $this->service->update($id, $request->all());
        return response()->json($res);
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}