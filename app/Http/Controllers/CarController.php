<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CarController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Car::with('user')->get());
    }

    public function store(Request $request): JsonResponse
    {
        $car = Car::create($request->all());
        return response()->json($car->load('user'));
    }

    public function show(int $id): JsonResponse
    {
        $car = Car::with('user')->findOrFail($id);
        return response()->json($car);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return response()->json($car->load('user'));
    }

    public function destroy(int $id): JsonResponse
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(['message' => 'Car deleted successfully']);
    }
}