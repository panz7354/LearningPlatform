@extends('layouts.app')

@section('style')
<style>
    .home-wrap {
        padding: 40px;
        max-width: 960px;
        margin: 0 auto;
    }

    /* ===== 歡迎 Banner ===== */
    .hero-card {
        background: linear-gradient(135deg, #4f86c6 0%, #7cb9f4 100%);
        border-radius: 16px;
        padding: 48px 48px 40px;
        margin-bottom: 28px;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .hero-card::before {
        content: '🎵';
        position: absolute;
        right: 40px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 100px;
        opacity: 0.15;
        pointer-events: none;
        line-height: 1;
    }

    .hero-tag {
        display: inline-block;
        background: rgba(255,255,255,0.22);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 4px 12px;
        border-radius: 20px;
        margin-bottom: 16px;
    }

    .hero-card h1 {
        font-family: 'Nunito', sans-serif;
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .hero-card p {
        font-size: 15px;
        line-height: 1.8;
        opacity: 0.92;
        max-width: 580px;
    }

    /* ===== 卡片區塊共用 ===== */
    .section-card {
        background: #fff;
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        padding: 36px 40px;
        margin-bottom: 28px;
    }

    .section-card h2 {
        font-family: 'Nunito', sans-serif;
        font-size: 20px;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .divider {
        border: none;
        border-top: 1.5px solid #e2e8f0;
        margin: 14px 0 20px;
    }

    .section-card p {
        font-size: 15px;
        line-height: 1.85;
        color: #475569;
    }

    /* ===== 流程圖區塊 ===== */
    .flow-img-wrap {
        margin-top: 20px;
        background: #f8fafc;
        border: 1px dashed #cbd5e1;
        border-radius: 10px;
        min-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .flow-img-wrap img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 10px;
    }

    .flow-img-placeholder {
        text-align: center;
        color: #94a3b8;
        padding: 40px;
    }

    .flow-img-placeholder p {
        font-size: 14px;
        color: #94a3b8;
    }

    /* ===== 快速入口卡片 ===== */
    .quick-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 14px;
        margin-top: 20px;
    }

    .quick-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 20px 16px;
        text-decoration: none;
        color: #1e293b;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
        transition: background 0.15s, border-color 0.15s, transform 0.15s, box-shadow 0.15s;
    }

    .quick-card:hover {
        background: #dbeafe;
        border-color: #93c5fd;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(79,134,198,0.15);
    }

    .quick-card .qc-icon {
        font-size: 26px;
        line-height: 1;
    }

    .quick-card .qc-num {
        font-size: 11px;
        font-weight: 700;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.06em;
    }

    .quick-card .qc-title {
        font-size: 13px;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.4;
    }

    /* ===== RWD ===== */
    @media screen and (max-width: 768px) {
        .home-wrap {
            padding: 20px 16px;
        }

        .hero-card {
            padding: 32px 24px;
        }

        .hero-card::before {
            right: 16px;
            font-size: 60px;
            opacity: 0.1;
        }

        .hero-card h1 {
            font-size: 22px;
        }

        .section-card {
            padding: 24px 20px;
        }
    }
</style>
@endsection

@section('content')
<div class="home-wrap">

    {{-- ===== Hero Banner ===== --}}
    <div class="hero-card">
        <div class="hero-tag">歡迎來到 PyMusic</div>
        <h1>計畫簡介與學習說明</h1>
        <p>
            本平台以 Python × Pygame 為核心，透過音樂驅動程式學習。
            你將在每個章節中透過真實可聽見的旋律，理解數值運算、串列、迴圈與函數等程式概念，讓學習更直覺、更有趣！
        </p>
    </div>

    {{-- ===== 學習流程圖 ===== --}}
    <div class="section-card">
        <h2></span> 學習流程圖</h2>
        <hr class="divider">
        <div class="flow-img-wrap">
            {{-- 有圖片時把 placeholder 刪掉，取消下面那行的註解即可 --}}
            <img src="{{ asset('img/learning.PNG') }}" alt="學習流程圖">
            {{-- <div class="flow-img-placeholder">
                <p>流程圖尚未上傳</p>
            </div> --}}
        </div>
    </div>

</div>
@endsection
