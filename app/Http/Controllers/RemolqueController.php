<?php

namespace App\Http\Controllers;

use App\Models\Remolque;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RemolqueController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Remolque::with('car')->get());
    }
    
    public function store(Request $request): JsonResponse
    {
        $remolque = Remolque::create($request->all());
        return response()->json($remolque->load('car'));
    }
    
    public function show(int $id): JsonResponse
    {
        $remolque = Remolque::with('car')->findOrFail($id);
        return response()->json($remolque);
    }
    
    public function update(Request $request, int $id): JsonResponse
    {
        $remolque = Remolque::findOrFail($id);
        $remolque->update($request->all());
        return response()->json($remolque->load('car'));
    }
    
    public function destroy(int $id): JsonResponse
    {
        $remolque = Remolque::findOrFail($id);
        $remolque->delete();
        return response()->json(['message' => 'Car deleted successfully']);
    }
}
