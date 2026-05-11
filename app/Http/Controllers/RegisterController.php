<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // 顯示註冊頁
    public function showRegister()
    {
        if (session('user_id')) {
            return redirect('/');
        }
        return view('register');
    }

    // 處理註冊
    public function register(Request $request)
    {
        $request->validate([
            'account'               => 'required|email|max:100|unique:users,account',
            'name'                  => 'required|max:50',
            'class_name'            => 'required|max:20',
            'password'              => 'required|min:6|confirmed',
        ], [
            'account.required'      => '請輸入電子郵件',
            'account.email'         => '請輸入有效的電子郵件格式',
            'account.max'           => '電子郵件最多 100 個字元',
            'account.unique'        => '此電子郵件已被註冊，請直接登入',
            'name.required'         => '請輸入姓名',
            'class_name.required'   => '請輸入班級',
            'password.required'     => '請輸入密碼',
            'password.min'          => '密碼至少 6 個字元',
            'password.confirmed'    => '兩次密碼輸入不一致',
        ]);

        // 建立帳號
        DB::table('users')->insert([
            'account'    => $request->account,
            'name'       => $request->name,
            'class_name' => $request->class_name,
            'password'   => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 註冊完自動登入
        $user = DB::table('users')->where('account', $request->account)->first();
        session([
            'user_id'      => $user->id,
            'user_name'    => $user->name,
            'user_account' => $user->account,
            'class_name'   => $user->class_name,
        ]);

        return redirect('/')->with('success', '註冊成功！歡迎加入，' . $user->name);
    }
}
