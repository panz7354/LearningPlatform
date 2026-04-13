<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lesson0', function () {
    return view('lesson0');
});
Route::get('/lesson1', function () {
    return view('lesson1');
});
Route::get('/lesson2', function () {
    return view('lesson2');
});
Route::get('/lesson3', function () {
    return view('lesson3');
});
Route::get('/lesson4', function () {
    return view('lesson4');
});
Route::get('/lesson5', function () {
    return view('lesson5');
});

Route::get('/app', function () {
    return view('layouts/app');
});
