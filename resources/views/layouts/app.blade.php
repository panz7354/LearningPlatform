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
            display: none;             /* 關鍵：預設不顯示 */
            background-color: #a0b2c8; /* 子選單背景顏色稍微做區隔 */
        }

        .sub-menu li a {
            display: block;
            padding: 10px 20px 10px 40px; /* 左邊 padding 給多一點，製造內縮的效果 */
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sub-menu li a:hover {
            background-color: #6a829e;
        }

        /* ==== 搭配 JavaScript 使用的互動 class ==== */
        /* 當子選單被加上 active class 時，改為顯示 */
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
    </style>
    @yield('style')
</head>
<body>

    <header class="navbar">
        <div class="logo">LOGO</div>
        <nav class="nav-links">
            <a href="/">首頁</a>
            <a href="/lesson">單元學習</a>
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
                        0. 基本概念 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#">0.1 簡介</a></li>
                        <li><a href="#">0.2 環境建置</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        1. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#">1.1 變數宣告</a></li>
                        <li><a href="#">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        2. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#">1.1 變數宣告</a></li>
                        <li><a href="#">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        3. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#">1.1 變數宣告</a></li>
                        <li><a href="#">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        4. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#">1.1 變數宣告</a></li>
                        <li><a href="#">1.2 基本資料型態</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-header">
                        5. 變數與資料型態 <span class="arrow">▼</span>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#">1.1 變數宣告</a></li>
                        <li><a href="#">1.2 基本資料型態</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <script>
        // 確保網頁元素都載入完成後才執行
        document.addEventListener('DOMContentLoaded', function() {
            // 抓取所有可以被點擊的主標題
            const headers = document.querySelectorAll('.nav-header');

            headers.forEach(header => {
                header.addEventListener('click', function() {
                    // 1. 切換標題本身的 active class (用來旋轉箭頭)
                    this.classList.toggle('active');

                    // 2. 找到這個標題緊接著的下一個元素 (也就是 sub-menu)
                    const subMenu = this.nextElementSibling;

                    // 3. 切換子選單的 active class (用來顯示/隱藏)
                    if (subMenu) {
                        subMenu.classList.toggle('active');
                    }
                });
            });
        });
    </script>

</body>
</html>
