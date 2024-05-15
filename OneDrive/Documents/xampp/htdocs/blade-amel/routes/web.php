<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dasboard', function () {
    return view('tamplate.dasboard');
});

Route::get('dashboard', function () {
    return view('tamplate.dashboard');
});

Route::get('icon', function () {
    return view('tamplate.icon');
});

Route::get('user', function () {
    return view('tamplate.user');
});