<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::take(10)->get();
        return view('words.index', compact('words'));
    }
        
    public function create()
    {
        return view('words.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'word' => 'required',
            'meaning' => 'required',
        ]);

        Word::create([
            'word' => $request->word,
            'meaning' => $request->meaning,
        ]);

        return redirect()->route('words.create')->with('success', '単語が作成されました。');
    }
    
        

}
