<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Hijri;
use App\Models\Volume;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    function date_update($id, Request $request){


        Date::find($id)->update([
            'date'=>$request->date,
            'time'=>$request->time
        ]);
        return back()->with('update', 'Time & Date Changed');
    }

    function hijri_update(Request $request){


        Hijri::find(1)->update([
            'hijri'=>$request->hijri,

        ]);
        return back()->with('update', 'Hijree Changed');
    }


    function volume_update(Request $request){


        Volume::find(1)->update([
            'volume'=>$request->volume,
        ]);
        return back()->with('update', 'Volume Laval Changed');
    }



    //Profile & Cover Photo
    function cover(){

        return view('frontend.cover_photo');
    }

    function cover_down(){

        $pathToFile = public_path('uploads/pic/9_Shareef_Cover_photo.jpg');
        return response()->download($pathToFile);
    }

     function profile(){

        return view('frontend.profile_photo');

    }

     function profile_down(){

        $pathToFile = public_path('uploads/pic/9_Shareef_Profile_photo.jpg');
        return response()->download($pathToFile);
    }










}
