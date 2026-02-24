<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\QuizAnswer;
use App\Models\QuizInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizInfo = QuizInfo::first();
        if ($quizInfo->starting > Carbon::now()) {
            return view('quiz.waiting');
        } elseif ($quizInfo->ending < Carbon::now()) {
            return view('quiz.timeout');
        }
        return view('quiz.index', compact('quizInfo'));
    }
    public function store(Request $request)
    {
        $quizInfo = QuizAnswer::create($request->all());
        return redirect()->route('quiz.complete');
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
