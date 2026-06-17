<?php

namespace App\Http\Controllers;

use App\Models\QuizAnswer;
use App\Models\QuizModel;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    function result(){
        $firsts = QuizModel::all();
        $quizers = QuizModel::orderByRaw('(LENGTH(lokob) - LENGTH(REPLACE(lokob, ",", ""))) DESC')->get();
        $answers = QuizAnswer::all();
        return view('quiz.result', [
            'firsts'=>$firsts,
            'quizers'=>$quizers,
            'answers'=>$answers,
        ]);
    }

    function certificate($id){

        $file = $id.'.jpg';

        $pathToFile = public_path('uploads/certificate/'.$file);
        return response()->download($pathToFile);
    }
}
