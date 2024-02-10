<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizResultController extends Controller
{
    public function index()
    {
        $quizResults = QuizResult::all();
        return view('quizResults.index' , compact('quizResults'));
    }
}
