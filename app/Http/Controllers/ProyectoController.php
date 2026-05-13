<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProyectoController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Proyecto::with('user')->orderBy('id','desc')->get());
    }

    public function store(Request $request): JsonResponse
    {
        $proyecto = Proyecto::create($request->all());
        return response()->json($proyecto->load('user'));
    }

    public function show(int $id): JsonResponse
    {
        $proyecto = Proyecto::with('user')->findOrFail($id);
        return response()->json($proyecto);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());
        return response()->json($proyecto->load('user'));
    }

    public function destroy(int $id): JsonResponse
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return response()->json(['message' => 'Proyecto deleted successfully']);
    }
}