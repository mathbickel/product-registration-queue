<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return response()->json($this->model::all());
    }

    public function show(Request $request)
    {
        return response()->json($this->model::find($request->id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);
        return response()->json($this->model::create($data), 201);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);

        $model = $this->model::find($id);
        $model->update($data);

        return response()->json($model);
    }

    public function destroy(int $id)
    {
        $model = $this->model::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
