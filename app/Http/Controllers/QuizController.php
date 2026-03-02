<?php

namespace App\Http\Controllers;

use App\Models\QuizAnswer;
use App\Models\QuizInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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


    public function qualified($id)
    {
        $answer = QuizAnswer::findOrFail($id);
        try {
            // Update Answer Qualified
            $answer->update([
                'qualified' => $answer->qualified == '1' ? '0' : '1',
            ]);
        } catch (\Exception $e) {
            Log::error($e);

            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Answer Qualified Updated Successfully'], 200);
    }


    public function winners()
    {
        $winners = QuizAnswer::where('qualified', '1')->get();
        return view("backend.quiz.winner", compact("winners"));
    }

    public function destroy(string $id)
    {
        $answer = QuizAnswer::findOrFail($id);

        try {
            // Delete category
            $answer->delete();
        } catch (\Exception $e) {
            Log::error($e);

            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Answer Deleted Successfully'], 200);
    }

    public function edit($id)
    {
        $lakab = QuizAnswer::findOrFail($id)->question2;
        return view("backend.quiz.edit", compact("lakab", "id"));
    }
    public function lakab_update(Request $request, $id)
    {

        QuizAnswer::findOrFail($id)->update([
            'question2' => $request->lakab
        ]);
        return redirect()->route('admin.quiz.winners')->with('success', 'Lakab Updated Successfully');
    }
}