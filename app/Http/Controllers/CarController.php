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
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2030',
            'color' => 'required|string|max:50',
            'license_plate' => 'required|string|unique:cars,license_plate|max:10',
            'user_id' => 'required|exists:users,id',
        ]);

        $car = Car::create($validated);
        return response()->json($car->load('user'), 201);
    }

    public function show(int $id): JsonResponse
    {
        $car = Car::with('user')->findOrFail($id);
        return response()->json($car);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'brand' => 'sometimes|string|max:255',
            'model' => 'sometimes|string|max:255',
            'year' => 'sometimes|integer|min:1900|max:2030',
            'color' => 'sometimes|string|max:50',
            'license_plate' => 'sometimes|string|unique:cars,license_plate,' . $id . '|max:10',
            'user_id' => 'sometimes|exists:users,id',
        ]);

        $car->update($validated);
        return response()->json($car->load('user'));
    }

    public function destroy(int $id): JsonResponse
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(['message' => 'Car deleted successfully']);
    }
}