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
// Si quiero mantener siempre el user en cada pagina he de pasarlo como en /dash con find y el array
Route::get('/dash', function () {
    $user = User::find(session('user_id'));
    return view('examen.dash', ['user' => $user]);
})->name('dash');

Route::get('/proyectos/create', function () {
    return view('examen.proyectos.create');
})->name('proyectos.create');

Route::get('/proyectos/edit/{id}', function ($id) {
    return view('examen.proyectos.edit', ['productId' => $id]);
})->name('proyectos.edit');

Route::get('/proyectos/delete', function () {
    return view('examen.proyectos.delete');
})->name('proyectos.delete');
