<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MentalEffortController extends Controller
{
    public function store(Request $request, $unit)
    {
        $request->validate([
            'effort_score' => 'required|integer|min:1|max:9',
        ]);

        DB::table('mental_effort')->insert([
            'user_id'      => session('user_id'),   // 訪客則為 null
            'unit_no'      => $unit,
            'effort_score' => $request->input('effort_score'),
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return response()->json(['status' => 'ok']);
    }
}
