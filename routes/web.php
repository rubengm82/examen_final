<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    $user = \App\Models\User::find(session('user_id'));
    return view('examen.dash', ['user' => $user]);
})->name('dash')->middleware('role:admin');

Route::get('/logout', [LoginController::class, 'logout']);
