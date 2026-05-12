<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Product::with('user')->get());
    }

    public function store(Request $request): JsonResponse
    {
        $product = Product::create($request->all());
        return response()->json($product->load('user'));
    }

    public function show(int $id): JsonResponse
    {
        $product = Product::with('user')->findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product->load('user'));
    }

    public function destroy(int $id): JsonResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}