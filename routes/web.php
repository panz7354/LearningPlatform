<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

// ===== 首頁 =====
Route::get('/', function () {
    return view('home');
});

// ===== 課程頁面 =====
Route::get('/lesson0', function () { return view('lesson/lesson0'); });
Route::get('/lesson1', function () { return view('lesson/lesson1'); });
Route::get('/lesson2', function () { return view('lesson/lesson2'); });
Route::get('/lesson3', function () { return view('lesson/lesson3'); });
Route::get('/lesson4', function () { return view('lesson/lesson4'); });
Route::get('/lesson5', function () { return view('lesson/lesson5'); });

// ===== 互動測驗 =====
Route::get('/quiz',        [QuizController::class, 'index']);   // 章節選擇頁
Route::get('/quiz/{unit}', [QuizController::class, 'show']);    // 章節測驗頁

// ===== layout 預覽（開發用） =====
Route::get('/app', function () {
    return view('layouts/app');
});
