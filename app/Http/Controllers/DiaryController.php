<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view('diaries.index' , compact('diaries'));
    }
}

class DiaryController extends Controller
{
    public function index()
    {
        $date = now()->format('Y-m-d');
        return view('diary.index', compact('date'));
    }

    public function translate(Request $request)
    {
        // 翻訳ロジックをここに追加する
    }
}
