<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorksController extends Controller
{


    function category_store(Request $request){
        Category::insert([
            'category'=>$request->category,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('created', 'Category Created Successfully');
    }
}
