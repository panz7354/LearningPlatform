<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // ===== 章節選擇頁 =====
    public function index()
    {
        // 每個章節有幾題（從 quiz_page 統計）
        $questionCounts = DB::table('quiz_page')
            ->select('unit_no', DB::raw('count(*) as total'))
            ->groupBy('unit_no')
            ->pluck('total', 'unit_no');  // [1 => 5, 2 => 4, ...]

        // 章節資訊（之後登入串接後可以在這裡加分數）
        $chapters = [
            ['unit' => 1, 'title' => '數值、字串與串列'],
            ['unit' => 2, 'title' => '選擇性敘述與迴圈'],
            ['unit' => 3, 'title' => '函數'],
            ['unit' => 4, 'title' => '物件導向程式設計'],
            ['unit' => 5, 'title' => '變數與資料型態'],
        ];

        // 把題目數量合併進去
        foreach ($chapters as &$ch) {
            $ch['total'] = $questionCounts[$ch['unit']] ?? 0;
            $ch['score'] = null;   // 登入後才有分數，先設 null
        }

        return view('quiz/quiz-index', ['chapters' => $chapters]);
    }

    // ===== 章節測驗頁 =====
    public function show($unit)
    {
        $questions = DB::table('quiz_page')
            ->where('unit_no', $unit)
            ->orderBy('id')
            ->get();

        // 把 options 字串拆成陣列
        foreach ($questions as $q) {
            $q->options_array = explode('|', $q->options);
        }

        return view('quiz/quiz', [
            'unit'      => $unit,
            'questions' => $questions,
        ]);
    }

    // ===== 儲存測驗結果 =====
    public function saveResult(Request $request, $unit)
    {
        $request->validate([
            'score' => 'required|integer|min:0|max:100',
        ]);

        DB::table('quiz_result')->insert([
            'user_id'    => session('user_id'),
            'unit_id'    => $unit,
            'score'      => $request->input('score'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['status' => 'ok']);
    }
}
