<?php

namespace App\Http\Controllers;

use App\Models\SocialPic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SocialPicController extends Controller
{
    public function index()
    {
        $socialPic = SocialPic::first();
        return view('backend.social_pic.index', [
            'socialPic' => $socialPic,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_pic' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:7048',
            'cover_pic'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:7048',
            'year'        => 'required|digits:4'
        ]);

        $data = SocialPic::firstOrNew([]);

        $data->year = $request->year;

        /*
    |--------------------------------------------------------------------------
    | PROFILE PIC
    |--------------------------------------------------------------------------
    */
        if ($request->hasFile('profile_pic')) {

            if ($data->exists && $data->profile_pic && File::exists(public_path($data->profile_pic))) {
                unlink(public_path($data->profile_pic));
            }

            $file = $request->file('profile_pic');
            $newName = 'profile_pic_' . $request->year . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/social/profile_pic'), $newName);

            $data->profile_pic = 'uploads/social/profile_pic/' . $newName;
        }

        /*
    |--------------------------------------------------------------------------
    | COVER PIC
    |--------------------------------------------------------------------------
    */
        if ($request->hasFile('cover_pic')) {

            if ($data->exists && $data->cover_pic && File::exists(public_path($data->cover_pic))) {
                unlink(public_path($data->cover_pic));
            }

            $coverFile = $request->file('cover_pic');
            $coverNewName = 'cover_pic_' . $request->year . '_' . time() . '.' . $coverFile->getClientOriginalExtension();
            $coverFile->move(public_path('uploads/social/cover_pic'), $coverNewName);

            $data->cover_pic = 'uploads/social/cover_pic/' . $coverNewName;
        }

        $data->save();

        return back()->with('success', 'Social Pic Saved Successfully');
    }
}