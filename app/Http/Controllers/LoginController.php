<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // 顯示登入頁
    public function showLogin()
    {
        if (session('user_id')) {
            return redirect('/');
        }
        return view('login');
    }

    // 處理登入
    public function login(Request $request)
    {
        $request->validate([
            'account'  => 'required|email',
            'password' => 'required',
        ], [
            'account.required'  => '請輸入電子郵件',
            'account.email'     => '請輸入有效的電子郵件格式',
            'password.required' => '請輸入密碼',
        ]);

        // 從資料庫找帳號
        $user = DB::table('users')
            ->where('account', $request->account)
            ->first();

        // 帳號不存在 or 密碼錯誤
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'account' => '電子郵件或密碼錯誤，請重新輸入',
            ])->withInput(['account' => $request->account]);
        }

        // 登入成功 → 存入 Session
        session([
            'user_id'      => $user->id,
            'user_name'    => $user->name,
            'user_account' => $user->account,
            'class_name'   => $user->class_name,
        ]);

        return redirect('/')->with('success', '登入成功！歡迎回來，' . $user->name);
    }

    // 登出
    public function logout()
    {
        session()->flush();
        return redirect('/login')->with('success', '已成功登出');
    }
}
