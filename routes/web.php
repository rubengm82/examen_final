<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('frontend.dash');
})->name('dash')->middleware('role:admin');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');
