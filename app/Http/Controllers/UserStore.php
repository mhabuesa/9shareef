<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStore extends Controller
{
    function user_store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:Users',
            'password'=>'required',
        ]);

        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('created', 'User Added Successfully');

    }

    function user_delete($id){

        if($id == Auth::id()){
            return back()->with('error', 'You Cannot Delete your own Account');
        }

        else{
            User::find($id)->delete();
            return back()->with('delete', 'Account Deleted Successfully');
        }

    }
}
