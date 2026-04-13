@extends('layouts.app')

@section('style')
    <style>
        h1{
            padding: 10px 40px;
        }
        h3{
            margin-top: 50px;
        }
        .learn{
            background-color: #4a5c73;
            color: white;
            margin-left: 0%;
            padding: 10px 40px 40px;
        }
        .learn a{
            color: white;
        }
        .af{
            display: flex;
            justify-content: space-around;
            padding-bottom: 10px 0px 20px;
        }
        .content{
            padding: 40px;
        }
        .start-btn{
            cursor: pointer;
            padding: 10px 20px;
            background-color: #8fa5c1;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .start-btn:hover{
            background-color: #7b90a8;
        }
    </style>
@endsection

@section('content')
    <h1>流程控制、選擇性敘述與迴圈</h1>

    <div class="learn">
        <h3 style="margin-top: 20px">學習目標：</h3>
        <div class="af">
            <a href="#section2-1" style="margin-right: 20px;">2.1 選擇性敘述</a>
            <a href="#section2-2" style="margin-right: 20px;">2.2 for迴圈</a>
            <a href="#section2-3" >2.3 while迴圈</a>
        </div>
    </div>

    <div class="content">
        <h2 id="section2-1">2.1 選擇性敘述</h2>
        <h3>程式觀念與重點語法說明</h3>
        <p>
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
        </p>

        <h3>範例講解</h3>
        <img src="五線譜範例圖片.png" alt="五線譜" style="max-width: 100%;"></img>
        <p>
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
        </p>

        <h3>範例程式碼 (含註解)</h3>
        <img src="程式碼截圖.png" alt="程式碼" style="max-width: 100%;">

        <br><br>
        <button class="start-btn">進入實作</button>

        <h2 id="section2-2" style="margin-top: 50px;">2.2 for迴圈</h2>
        <p>準備放置 for 迴圈的內容...</p>
    </div>


@endsection
