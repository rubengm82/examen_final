<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\User;


Route::get('/', function () {
    if (session('user_id')) {
        return redirect('/dash');
    }
    return view('examen');
})->name('home');

Route::get('/login', function () {
    if (session('user_id')) {
        return redirect('/dash');
    }
    return view('examen.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/dash', function () {
    $user = User::find(session('user_id'));
    return view('examen.dash', ['user' => $user]);
})->name('dash');
// ->middleware('role:admin'); se pone al final por ejemplo de la linea de arriba
//    asi no entra nadie que no sea admin

Route::get('/logout', [LoginController::class, 'logout']);
