{{--
    共用課程頁樣式
    使用方式：在各 lesson 頁的 @section('style') 中 @include('_lesson-styles')
--}}
<style>
    /* ===== 頁面整體 ===== */
    .lesson-wrap {
        max-width: 900px;
        margin: 0 auto;
        padding: 32px 40px 60px;
    }

    /* ===== 章節標題列（含音檔播放器） ===== */
    .lesson-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        padding: 24px 32px;
        margin-bottom: 24px;
        gap: 20px;
    }

    .lesson-header h1 {
        font-family: 'Nunito', sans-serif;
        font-size: 22px;
        font-weight: 800;
        color: #1e293b;
        margin: 0;
        line-height: 1.3;
    }

    .audio-wrap {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
    }

    .audio-wrap span {
        font-size: 13px;
        font-weight: 600;
        color: #64748b;
        white-space: nowrap;
    }

    .audio-wrap audio {
        height: 36px;
        width: 240px;
    }

    /* ===== 學習目標區塊 ===== */
    .lesson-goals {
        background: linear-gradient(135deg, #4f86c6 0%, #6fa3d8 100%);
        border-radius: 14px;
        padding: 24px 32px;
        margin-bottom: 28px;
        color: #fff;
    }

    .lesson-goals h3 {
        font-family: 'Nunito', sans-serif;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        opacity: 0.85;
        margin: 0 0 14px;
        padding: 0;
    }

    .goal-links {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .goal-links a {
        display: inline-block;
        background: rgba(255,255,255,0.18);
        color: #fff;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,0.3);
        transition: background 0.15s;
    }

    .goal-links a:hover {
        background: rgba(255,255,255,0.32);
    }

    /* ===== 主要內容區 ===== */
    .lesson-content {
        background: #fff;
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        padding: 36px 40px;
    }

    /* ===== 章節標題 ===== */
    .lesson-content h2 {
        font-family: 'Nunito', sans-serif;
        font-size: 20px;
        font-weight: 800;
        color: #1e293b;
        margin: 48px 0 4px;
        padding: 0;
        padding-bottom: 10px;
        border-bottom: 2px solid #e2e8f0;
    }

    .lesson-content h2:first-child {
        margin-top: 0;
    }

    .lesson-content h3 {
        font-size: 16px;
        font-weight: 700;
        color: #334155;
        margin: 28px 0 6px;
        padding: 0;
    }

    .lesson-content h4 {
        font-size: 14px;
        font-weight: 700;
        color: #4f86c6;
        margin: 20px 0 6px;
        padding: 0;
    }

    .lesson-content h5 {
        font-size: 13px;
        font-weight: 700;
        color: #4f86c6;
        margin: 14px 0 4px;
    }

    /* ===== 段落文字 ===== */
    .lesson-content p {
        font-size: 15px;
        line-height: 1.85;
        color: #475569;
        margin: 8px 0;
        padding: 0;
    }

    /* ===== 分隔線 ===== */
    .lesson-content hr {
        border: none;
        border-top: 1.5px solid #e2e8f0;
        margin: 28px 0;
    }

    /* ===== 表格 ===== */
    .lesson-content table {
        border-collapse: collapse;
        margin: 12px 0 16px;
        font-size: 14px;
        width: auto;
    }

    .lesson-content table th {
        background: #f1f5f9;
        color: #334155;
        font-weight: 700;
        padding: 10px 18px;
        border: 1px solid #e2e8f0;
        text-align: left;
    }

    .lesson-content table td {
        padding: 9px 18px;
        border: 1px solid #e2e8f0;
        color: #475569;
    }

    .lesson-content table tr:nth-child(even) td {
        background: #f8fafc;
    }

    /* ===== 程式碼區塊 ===== */
    .lesson-content pre {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-left: 4px solid #4f86c6;
        border-radius: 0 8px 8px 0;
        padding: 18px 22px;
        margin: 14px 0;
        overflow-x: auto;
        font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
        font-size: 13.5px;
        line-height: 1.65;
        color: #c10000;
    }

    .lesson-content pre code {
        font-family: inherit;
        color: inherit;
    }

    /* ===== 圖片 ===== */
    .lesson-content img {
        display: block;
        margin: 16px auto;
        max-width: 100%;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
    }

    /* ===== 有序清單 ===== */
    .lesson-content ol {
        padding-left: 24px;
        margin: 10px 0;
        color: #475569;
        font-size: 15px;
        line-height: 1.85;
    }

    /* ===== 按鈕 ===== */
    .start-btn {
        display: inline-block;
        margin-top: 8px;
        cursor: pointer;
        padding: 10px 24px;
        background: #4f86c6;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        font-family: 'Noto Sans TC', sans-serif;
        transition: background 0.15s, transform 0.12s;
    }

    .start-btn:hover {
        background: #2d6aa8;
        transform: translateY(-1px);
    }

    /* ===== RWD ===== */
    @media screen and (max-width: 768px) {
        .lesson-wrap { padding: 16px; }

        .lesson-header {
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
        }

        .audio-wrap audio { width: 100%; }

        .lesson-goals { padding: 20px; }

        .lesson-content {
            padding: 24px 18px;
        }

        .lesson-content table { width: 100%; }
    }
</style>
