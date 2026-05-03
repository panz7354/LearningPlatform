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
            flex-shrink: 0; /* 新增這行：防止側邊欄在 flex 容器中被壓縮變窄 */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu{
            display: block;
            padding: 0;
            margin: 20px 0; /* 留一點上下間距即可，左右間距靠 nav-header 控制 */
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

        .nav-header a {
            display: block;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .nav-header:hover {
            background-color: #7b90a8; /* 滑鼠移過去時的顏色變化 */
        }

        .main-content {
            flex: 1;            /* 佔滿側邊欄右邊的所有剩餘空間 */
            overflow-y: auto;   /* 讓主要內容區可以獨立上下滾動 */
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
                        <a href="lesson0">第0章 Pygame 套件介紹</a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        <a href="lesson1">第1章	數值、字串與串列</a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        <a href="lesson2">第2章 選擇性敘述與迴圈</a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        <a href="lesson3">第3章 函數</a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        <a href="lesson4">第4章 物件導向程式設計</a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        <a href="lesson5">5. 變數與資料型態</a>
                    </div>
                </li>
            </ul>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- 漢堡按鈕開關邏輯 ---
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
