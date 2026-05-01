<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(User::all());
    }

    public function store(Request $request): JsonResponse
    {
        $user = User::create($request->all());
        $user->password = bcrypt($user->password);
        $user->save();
        return response()->json($user);
    }

    public function show(int $id): JsonResponse
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        if ($user->password) {
            $user->password = bcrypt($user->password);
            $user->save();
        }
        return response()->json($user);
    }

    public function destroy(int $id): JsonResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}