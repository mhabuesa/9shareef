<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('quiz.index');
        // return view('quiz.waiting');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }

    public function quiz_complete()
    {
        return view('quiz.complete');
    }

    public function timeout()
    {
        return view('quiz.timeout');
    }
}