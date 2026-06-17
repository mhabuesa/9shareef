<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\QuizAnswer;
use App\Models\QuizModel;
use App\Models\QuizQaseedah;
use App\Models\QuizSentence;
use App\Models\QuizStartEndTimeModel;
use App\Models\QuizVisitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizCOntroller extends Controller
{
    // quiz
    function quiz(Request $request){

        $currentTime = Carbon::now()->format('H:i');
        $currentDate = Carbon::now()->format('Y.m.d');

        $startDate = QuizStartEndTimeModel::find(1)->start_date;
        $startTime = QuizStartEndTimeModel::find(1)->start_time;

        $endTime = QuizStartEndTimeModel::find(1)->end_time;
        $endDate = QuizStartEndTimeModel::find(1)->end_date;

        $dateTime = QuizStartEndTimeModel::find(1);

        // dd($startDate .' //' . $currentDate );




        if($currentDate <= $startDate){
            if($currentTime < $startTime){
                return view('quiz.start_count',[
                    'dateTime'=>$dateTime,

                ]);
            }
            else{
                if($currentDate <= $endDate){

                    if($currentTime >= $endTime){
                        return view('quiz.time_up');
                    }
                    else{
                        $ip = $request->ip();
                        QuizVisitor::Create(['ip' => $ip]);

                        return view('quiz.quiz',[
                            'dateTime'=>$dateTime,
                        ]);
                    }


                }
                else{
                    return view('quiz.time_up');
                }
            }
        }
        else{
            if($currentDate <= $endDate){

                if($currentTime >= $endTime){
                    return view('quiz.time_up');
                }
                else{
                    $ip = $request->ip();
                    QuizVisitor::Create(['ip' => $ip]);

                    return view('quiz.quiz',[
                        'dateTime'=>$dateTime,
                    ]);

                }


            }
            else{
                return view('quiz.time_up');
            }
        }
    }

    function quiz_store(Request $request){

        $quiz =  QuizModel::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'ans1'=>$request->qs1,
            'ans2'=>$request->qs2,
            'ans3'=>$request->qs3,
            'ans4'=>$request->qs4,
            'ans5'=>$request->qs5,
            'ans6'=>$request->qs6,
            'ans7'=>$request->qs7,
            'ans8'=>$request->qs8,
            'ans9'=>$request->qs9,
            'lokob'=>$request->lokob,
        ]);

        QuizSentence::create([
            'quiz_id'=>$quiz->id,
            'sentence1'=>$request->sentence1,
            'sentence2'=>$request->sentence2,
            'sentence3'=>$request->sentence3,
        ]);

        QuizQaseedah::create([
            'quiz_id'=>$quiz->id,
            'qaseedah1'=>$request->qaseedah1,
            'qaseedah2'=>$request->qaseedah2,
            'qaseedah3'=>$request->qaseedah3,
            'qaseedah4'=>$request->qaseedah4,
        ]);

        return redirect()->route('quiz.success');

    }

    function quiz_success(){

        return view('quiz.quiz_success');

    }

    function quiz_list(){
        $quizes = QuizModel::all();
        $quizVisitor = QuizVisitor::count();
        return view('quiz.quiz_list',[
            'quizes'=>$quizes,
            'quizVisitor'=>$quizVisitor,
        ]);
    }

    function quiz_time(){
        $time = QuizStartEndTimeModel::find(1);
        return view('quiz.quiz_time',[
            'time'=>$time,
        ]);
    }

    function quiz_time_update(Request $request){
        QuizStartEndTimeModel::find(1)->update([
            'start_date'=>$request->start_date,
            'start_time'=>$request->start_time,
            'end_date'=>$request->end_date,
            'end_time'=>$request->end_time,
        ]);
        return back()->with('update', 'Quiz Date & Time Update');
    }



    public function quiz_delete(Request $request, $id){
        QuizQaseedah::find($id)->delete();
        QuizSentence::find($id)->delete();
        QuizModel::find($id)->delete();
        return back()->with('delete', 'Quiz Deleted Successfully');
    }

    public function quiz_deleteAll(Request $request){
        $quizs = $request->quiz;
        foreach($quizs as $quiz){
            QuizQaseedah::where('quiz_id', $quiz)->delete();
            QuizSentence::where('quiz_id', $quiz)->delete();
            QuizModel::find($quiz)->delete();
        }
        return back()->with('delete', 'Quiz Deleted Successfully');
    }

    public function quiz_test_result(Request $request){
        $quizes = QuizModel::all();
        return view('quiz.quiz_test_result',[
            'quizes'=>$quizes,
        ]);
    }








}
