@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 5 章　（待補章節名稱）</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/5_Alice.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section5-1">1. （待補）</a>
            <a href="#section5-2">2. （待補）</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section5-1">1. （待補小節名稱）</h2>

        <h3>重點語法</h3>
        <p>此區塊內容尚未填入，請依照前幾章格式補充。</p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：（待補）</h4>
        <p>題目說明待補。</p>
        <pre>參考程式：
# 待補</pre>

        <h4>範例(二)：（待補）</h4>
        <p>題目說明待補。</p>
        <pre>參考程式：
# 待補</pre>

        <h2 id="section5-2">2. （待補小節名稱）</h2>

        <h3>重點語法</h3>
        <p>此區塊內容尚未填入，請依照前幾章格式補充。</p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：（待補）</h4>
        <p>題目說明待補。</p>
        <pre>參考程式：
# 待補</pre>

        <h4>範例(二)：（待補）</h4>
        <p>題目說明待補。</p>
        <pre>參考程式：
# 待補</pre>

    </div>
</div>
@endsection
