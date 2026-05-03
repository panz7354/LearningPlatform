<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>教學網站</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .header {
            background-color: #8da1b9;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #8da1b9;
            padding: 15px 30px;
            color: white;
        }

        .login-btn{
            background-color: #8fa5c1;
            cursor: pointer;
            padding: 10px 20px;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 5px;
        }

        .login-btn:hover{
            background-color: #7b90a8;
        }

        .nav-links a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
        }

        .container {
            display: flex;
            flex: 1; /* 填滿剩餘高度 */
            overflow: hidden;
        }

        .sidebar {
            width: 250px;
            background-color: #8da1b9;
            overflow-y: auto;
            color: white;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu{
            display: block;
            padding: 15px 50px;
            margin: 50px;
        }

        .nav-header {
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: background-color 0.3s;
        }

        .nav-header:hover {
            background-color: #7b90a8; /* 滑鼠移過去時的顏色變化 */
        }

        .sub-menu {
            display: none;             /*關鍵：預設不顯示*/
            background-color: #a0b2c8; /*子選單背景顏色稍微做區隔*/
        }

        .sub-menu li a {
            display: block;
            padding: 10px 20px 10px 40px; /*左邊 padding 給多一點，製造內縮的效果*/
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sub-menu li a:hover {
            background-color: #6a829e;
        }

        /* ==== 搭配 JavaScript 使用的互動 class ==== */
        /* 當子選單被加上 active class 時，改為顯示*/
        .sub-menu.active {
            display: block;
        }

        /* 箭頭旋轉動畫 */
        .arrow {
            transition: transform 0.3s ease;
            font-size: 12px;
        }

        /* 當標題被點擊展開時，箭頭旋轉 180 度 */
        .nav-header.active .arrow {
            transform: rotate(-180deg);
        }
        .main-content {
            flex: 1;
            overflow-y: auto;
        }

        /* ==== 漢堡按鈕基礎樣式 (桌機版預設隱藏) ==== */
        .hamburger-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 28px;
            cursor: pointer;
        }

        /* =========================================
           手機與平板版 RWD 設定 (寬度小於 768px)
           ========================================= */
        @media screen and (max-width: 768px) {
            /* 1. 導覽列排版：讓 LOGO 和漢堡按鈕分居左右 */
            .navbar {
                flex-wrap: wrap; /* 允許換行 */
            }

            /* 2. 顯示漢堡按鈕 */
            .hamburger-btn {
                display: block;
            }

            /* 3. 預設隱藏頂部的連結與登入按鈕 (可選，讓畫面更乾淨) */
            .nav-links, .login-btn {
                display: none;
            }

            /* 4. 修改 container 變為上下排列 */
            .container {
                flex-direction: column;
                overflow: auto;
            }

            /* 5. 側邊欄預設隱藏，改為 100% 寬度 */
            .sidebar {
                display: none; /* 關鍵：手機版預設看不到 */
                width: 100%;
                border-bottom: 3px solid #6a829e;
            }

            /* 6. 當側邊欄加上 show-menu 類別時才顯示 (搭配 JS) */
            .sidebar.show-menu {
                display: block;
            }
        }
    </style>
    @yield('style')
</head>
<body>

    <header class="navbar">
        <div class="logo">LOGO</div>

        <button class="hamburger-btn" id="hamburger-btn">
            ☰
        </button>

        <nav class="nav-links">
            <a href="/">首頁</a>
            <a href="lesson0">單元學習</a>
            <a href="#">程式實作</a>
            <a href="#">互動測驗</a>
        </nav>
        <button class="login-btn">登入</button>
    </header>

    <div class="container">
        <nav class="sidebar">
            <ul class="nav-menu">
                <li class="nav-item">
                    <div class="nav-header">
                        第0章 Pygame 套件介紹 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="lesson0">1. Pygame套件概述</a></li>
                        <li><a href="lesson0">2. pygame.midi的核心概念</a></li>
                        <li><a href="lesson0">3. 常見程式碼與邏輯說明</a></li>
                        <li><a href="lesson0">4. 整體程式邏輯</a></li>
                        <li><a href="lesson0">5. 範例程式說明</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        第1章	數值、字串與串列 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="lesson1">1.1 數值運算與字串處理</a></li>
                        <li><a href="lesson1">1.2 串列與相關處理函數</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        2. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="lesson2">1.1 變數宣告</a></li>
                        <li><a href="lesson2">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        3. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="lesson3">1.1 變數宣告</a></li>
                        <li><a href="lesson3">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        4. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="lesson4">1.1 變數宣告</a></li>
                        <li><a href="lesson4">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        5. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="lesson5">1.1 變數宣告</a></li>
                        <li><a href="lesson5">1.2 基本資料型態</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- 原本的側邊欄子選單開關邏輯 ---
            const headers = document.querySelectorAll('.nav-header');
            headers.forEach(header => {
                header.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const subMenu = this.nextElementSibling;
                    if (subMenu) {
                        subMenu.classList.toggle('active');
                    }
                });
            });

            // --- 新增：漢堡按鈕開關邏輯 ---
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const sidebar = document.querySelector('.sidebar');

            // 當點擊漢堡按鈕時，切換 sidebar 的 'show-menu' class
            hamburgerBtn.addEventListener('click', function() {
                sidebar.classList.toggle('show-menu');
            });
        });
    </script>

</body>
</html>
