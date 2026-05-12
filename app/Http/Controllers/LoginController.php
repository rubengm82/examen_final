<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();
        
        if (!$user) {
            return redirect('/login')->with('error', 'Credenciales inválidas');
        }
        
        session(['user_id' => $user->id]);
        
        return redirect('/dash');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
