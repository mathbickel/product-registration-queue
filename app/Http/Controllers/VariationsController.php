<?php

namespace App\Http\Controllers;

use App\Products\Variations\Domain\VariationService;
use Illuminate\Http\Request;

class VariationsController extends BaseController
{
    public function __construct (
        protected VariationService $service
    ) {
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        $var = $this->service->getaAll();
        return response()->json($var);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $var = $this->service->create($request->all());
        return response()->json($var, 201);
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