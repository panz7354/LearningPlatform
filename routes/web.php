<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lesson', function () {
    return view('lesson');
});
