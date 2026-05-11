<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>教學網站</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html, body {
            min-height: 100%;
            font-family: 'Noto Sans TC', sans-serif;
            background: #f0f4f8;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .register-card {
            background: #fff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            padding: 48px 44px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 8px 32px rgba(79,134,198,0.10);
        }

        /* ===== Logo ===== */
        .login-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 32px;
        }
        .login-logo .logo-text {
            font-family: 'Nunito', sans-serif;
            font-size: 22px;
            font-weight: 800;
            color: #4f86c6;
        }

        /* ===== 標題 ===== */
        .page-title {
            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 6px;
        }
        .page-sub {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 32px;
        }

        /* ===== 表單 ===== */
        .form-group { margin-bottom: 18px; }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 7px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            font-size: 15px;
            font-family: 'Noto Sans TC', sans-serif;
            color: #1e293b;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            outline: none;
            transition: border-color 0.15s, background 0.15s;
        }
        .form-input:focus {
            border-color: #4f86c6;
            background: #fff;
        }
        .form-input.is-error {
            border-color: #ef4444;
            background: #fff;
        }

        .field-hint {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 5px;
        }

        .field-error {
            font-size: 12px;
            color: #ef4444;
            font-weight: 600;
            margin-top: 5px;
        }

        /* ===== 送出按鈕 ===== */
        .submit-btn {
            width: 100%;
            padding: 13px;
            font-size: 15px;
            font-weight: 700;
            font-family: 'Noto Sans TC', sans-serif;
            color: #fff;
            background: #4f86c6;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.15s, transform 0.12s;
            margin-top: 10px;
        }
        .submit-btn:hover {
            background: #2d6aa8;
            transform: translateY(-1px);
        }

        /* ===== 底部登入連結 ===== */
        .card-footer {
            text-align: center;
            font-size: 13px;
            color: #64748b;
            margin-top: 24px;
        }
        .card-footer a {
            color: #4f86c6;
            font-weight: 700;
            text-decoration: none;
        }
        .card-footer a:hover { text-decoration: underline; }

        /* ===== RWD ===== */
        @media screen and (max-width: 480px) {
            .register-card { padding: 32px 20px; }
        }
    </style>
</head>
<body>

<div class="register-card">

    {{-- Logo --}}
    <div class="login-logo">
        <span class="logo-text">PyMusic</span>
    </div>

    <h1 class="page-title">建立帳號</h1>
    <p class="page-sub">填寫以下資料完成註冊，帳號請使用電子郵件</p>

    <form method="POST" action="/register">
        @csrf

        {{-- 帳號 --}}
        <div class="form-group">
            <label class="form-label" for="account">電子郵件</label>
            <input
                class="form-input {{ $errors->has('account') ? 'is-error' : '' }}"
                type="email"
                id="account"
                name="account"
                value="{{ old('account') }}"
                placeholder="請輸入電子郵件，例如：abc@gmail.com"
                autocomplete="email"
            >
            <p class="field-hint">請輸入有效的電子郵件地址，作為登入帳號使用</p>
            @error('account')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        {{-- 姓名 --}}
        <div class="form-group">
            <label class="form-label" for="name">姓名</label>
            <input
                class="form-input {{ $errors->has('name') ? 'is-error' : '' }}"
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="請輸入真實姓名"
            >
            @error('name')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        {{-- 班級 --}}
        <div class="form-group">
            <label class="form-label" for="class_name">班級</label>
            <input
                class="form-input {{ $errors->has('class_name') ? 'is-error' : '' }}"
                type="text"
                id="class_name"
                name="class_name"
                value="{{ old('class_name') }}"
                placeholder="資管碩一"
            >
            @error('class_name')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        {{-- 密碼 --}}
        <div class="form-group">
            <label class="form-label" for="password">密碼</label>
            <input
                class="form-input {{ $errors->has('password') ? 'is-error' : '' }}"
                type="password"
                id="password"
                name="password"
                placeholder="至少 6 個字元"
                autocomplete="new-password"
            >
            @error('password')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        {{-- 確認密碼 --}}
        <div class="form-group">
            <label class="form-label" for="password_confirmation">確認密碼</label>
            <input
                class="form-input"
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="再輸入一次密碼"
                autocomplete="new-password"
            >
        </div>

        <button type="submit" class="submit-btn">建立帳號</button>
    </form>

    <div class="card-footer">
        已經有帳號了？<a href="/login">點此登入</a>
    </div>

</div>

</body>
</html>
