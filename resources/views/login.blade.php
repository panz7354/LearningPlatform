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
            height: 100%;
            font-family: 'Noto Sans TC', sans-serif;
            background: #f0f4f8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: #fff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            padding: 48px 44px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 8px 32px rgba(79,134,198,0.10);
        }

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

        .login-title {
            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 6px;
        }
        .login-sub {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 32px;
        }

        .alert-success {
            background: #dcfce7;
            color: #15803d;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .alert-error {
            background: #fee2e2;
            color: #b91c1c;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-group { margin-bottom: 20px; }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 8px;
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
        .form-input.is-error { border-color: #ef4444; }

        .field-error {
            font-size: 12px;
            color: #ef4444;
            font-weight: 600;
            margin-top: 6px;
        }

        .login-btn {
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
            margin-top: 8px;
        }
        .login-btn:hover {
            background: #2d6aa8;
            transform: translateY(-1px);
        }

        .login-footer {
            text-align: center;
            font-size: 13px;
            color: #94a3b8;
            margin-top: 24px;
        }

        @media screen and (max-width: 480px) {
            .login-card { padding: 32px 24px; margin: 16px; }
        }
    </style>
</head>
<body>

<div class="login-card">

    <div class="login-logo">
        <span class="logo-text">PyMusic</span>
    </div>

    <h1 class="login-title">歡迎回來</h1>
    <p class="login-sub">請輸入電子郵件與密碼登入</p>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->has('account'))
        <div class="alert-error">{{ $errors->first('account') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="form-group">
            <label class="form-label" for="account">電子郵件</label>
            <input
                class="form-input {{ $errors->has('account') ? 'is-error' : '' }}"
                type="email"
                id="account"
                name="account"
                value="{{ old('account') }}"
                placeholder="請輸入電子郵件"
                autocomplete="email"
            >
            @error('account')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">密碼</label>
            <input
                class="form-input {{ $errors->has('password') ? 'is-error' : '' }}"
                type="password"
                id="password"
                name="password"
                placeholder="請輸入密碼"
                autocomplete="current-password"
            >
            @error('password')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="login-btn">登入</button>
    </form>

    <div style="text-align:center; margin-top:20px; font-size:13px; color:#64748b;">
        還沒有帳號？<a href="/register" style="color:#4f86c6; font-weight:700; text-decoration:none;">點此註冊</a>
    </div>
    <p class="login-footer" style="margin-top:12px;">忘記密碼請洽老師重設</p>
</div>

</body>
</html>
