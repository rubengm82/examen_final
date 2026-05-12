<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\User;


Route::get('/', function () {
    if (session('user_id')) {
        return redirect('/dash');
    }
    return view('examen');
})->name('home');

/* LOGIN Y LOGOUT */
Route::get('/login', function () {
    if (session('user_id')) {
        return redirect('/dash');
    }
    return view('examen.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


/* ROUTES DE LA APP VISIBLE SIN API */
Route::get('/dash', function () {
    $user = User::find(session('user_id'));
    return view('examen.dash', ['user' => $user]);
})->name('dash');

Route::get('/products/create', function () {
    return view('examen.products.create');
})->name('products.create');

Route::get('/products/edit/{id}', function ($id) {
    return view('examen.products.edit', ['productId' => $id]);
})->name('products.edit');

Route::get('/products/delete', function () {
    return view('examen.products.delete');
})->name('products.delete');
