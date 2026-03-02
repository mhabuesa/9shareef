<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\QuizAnswer;
use App\Models\QuizInfo;
use App\Models\Socialize;
use App\Models\SocialPic;
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

    public function result()
    {
        $cover = Socialize::first()->cover_pic;
        $winners = QuizAnswer::where('qualified', '1')
            ->orderByRaw("STR_TO_DATE(solved_time, '%i:%s') ASC")
            ->get();
        return view('quiz.result', compact('cover', 'winners'));
    }
}
