<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Support\Facades\View;

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
            // 日本語のテキストを取得
    $japaneseText = $request->input('japanese_text');

    // OpenAIを使用して日本語テキストを英文に変換する処理
    $englishText = "Translated English Text"; // ここに実際の翻訳処理を記述する

    // ビューにデータを渡す
    return View::make('diary.translate', compact('japaneseText', 'englishText'));
    }
}
