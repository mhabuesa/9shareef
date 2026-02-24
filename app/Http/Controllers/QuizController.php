<?php

namespace App\Http\Controllers;

use App\Models\QuizAnswer;
use App\Models\QuizInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $data = QuizInfo::first();
        return view("backend.quiz.index", compact("data"));
    }

    public function quiz_update(Request $request)
    {
        $request->validate([
            'starting_date' => 'required',
            'ending_date' => 'required',
        ]);
        QuizInfo::updateOrCreate(
            ['id' => 1],
            [
                'year'     => $request->year,
                'starting' => Carbon::parse($request->starting_date),
                'ending'   => Carbon::parse($request->ending_date),
            ]
        );
        return redirect()->route('admin.quiz.index')->with('success', 'Quiz Info Updated Successfully');
    }

    public function answer()
    {
        $quizAnswers = QuizAnswer::all();
        return view("backend.quiz.answer", compact("quizAnswers"));
    }
}
