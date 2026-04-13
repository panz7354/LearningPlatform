<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lesson', function () {
    return view('lesson');
});

Route::get('/app', function () {
    return view('layouts/app');
});
