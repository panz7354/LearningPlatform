@extends('layouts.app')

@section('style')
    <style>
        .main{
            padding: 40px;
        }

        hr {
            display: block;
            margin-before: 0.5em;
            margin-after: 0.5em;
            margin-start: auto;
            margin-end: auto;
            border-style: inset;
            border-width: 3px;
            border-color:white;
        }
    </style>
@endsection


@section('content')
<div class="main">
    <div style="background-color: #a8a8a8; padding: 50px; border-radius: 10px; margin-bottom: 20px;">
        <h2 style="color: white">計畫簡介與學習說明</h2>
        <hr>
        <p>
            淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字
            淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字
            淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字
            淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字淺顯文字
        </p>
    </div>
    <div style="background-color: #f6ff4f; padding: 50px; border-radius: 10px; margin-bottom: 20px;">
        <h2>學習流程圖</h2>
        <img src="流程圖的路徑.jpg" alt="學習流程圖" style="width: 100%;">
    </div>
</div>
@endsection
