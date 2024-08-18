<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service::all());
    }

    public function show(Request $request)
    {
        return response()->json($this->service::find($request->id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);
        return response()->json($this->service::create($data), 201);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);

        $service = $this->service::find($id);
        $service->update($data);

        return response()->json($service);
    }

    public function destroy(int $id)
    {
        $service = $this->service::find($id);
        $service->delete();

        return response()->json(null, 204);
    }
}
