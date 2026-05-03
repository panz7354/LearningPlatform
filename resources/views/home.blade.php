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

        /* =========================================
           手機與平板版 RWD 設定 (寬度小於 768px)
           ========================================= */
        @media screen and (max-width: 768px) {
            /* 縮小最外層的留白 */
            .main {
                padding: 15px;
            }

            /* 針對內層使用 inline-style 的 div 強制縮小 padding */
            .main > div {
                padding: 20px !important;
            }

            /* 確保圖片不會超出螢幕 */
            img {
                max-width: 100%;
                height: auto;
            }
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
