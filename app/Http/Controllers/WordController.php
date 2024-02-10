<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::all();
        return view('words.index' , compact('words'));
    }
}
