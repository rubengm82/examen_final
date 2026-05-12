<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $userId = session('user_id');
        
        if (!$userId) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'No autenticado'], 401);
            }
            return redirect('/login');
        }
        
        $userModel = \App\Models\User::find($userId);
        
        if (!$userModel || $userModel->role !== $role) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'No tienes permisos'], 403);
            }
            return redirect('/login');
        }
        
        return $next($request);
    }
}
