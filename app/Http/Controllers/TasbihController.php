<?php

namespace App\Http\Controllers;

use App\Models\Tasbih;
use App\Models\TasbihVisibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasbihController extends Controller
{

    public function visibility()
    {
        return view('tasbih.visibility');
    }
    public function signup()
    {
        $visibility = TasbihVisibility::first()->status;

        if ($visibility == 0) {
            return redirect()->route('visibility');
        } else {
            if (Auth::guard('tasbih')->check()) {
                return redirect()->route('tasbih');
            } else {
                return view('tasbih.signup');
            }
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric',
            'name' => 'required',
        ]);

        $otp = random_int(10000, 99999);

        $phone = $request->input('phone');

        // Check if the phone number starts with +88 or 88
        if (str_starts_with($phone, '+88')) {
            $phone = substr($phone, 3); // Remove +88
        } elseif (str_starts_with($phone, '88')) {
            $phone = substr($phone, 2); // Remove 88
        }

        // Ensure the phone number is exactly 11 digits
        if (strlen($phone) !== 11) {
            return back()->with(['error_phone' => '১১ ডিজিটের সঠিক নম্বর লিখুন'])
                ->withInput();
        }

        $tasbih = Tasbih::where('phone', $phone)->exists();

        if ($tasbih) {
            return redirect()->route('tasbih.signin')->with(['error' => 'এই নাম্বারটি আগেই ব্যবহার করা হয়েছে'])->withInput();
        } else {

            // Send OTP
            $url = "http://bulksmsbd.net/api/smsapi";
            $api_key = "K9YXIwC5K6nifLYd4XL3";
            $senderid = "8809617624467";
            $number = "$request->phone";
            $message = "মাশুকী দুনিয়ায় আপনায় স্বাগতম ❤️ \nআপনার ওটিপি কোডঃ $otp \n\nবেশুমার শুকরিয়া \nছাত্র আনজুমান";

            $data = [
                "api_key" => $api_key,
                "senderid" => $senderid,
                "number" => $number,
                "message" => $message
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            curl_close($ch);

            Tasbih::Create([
                'phone' => $phone,
                'address' => $request->address,
                'name' => $request->name,
                'otp' => $otp
            ]);
        }

        return redirect()->route('tasbih.verify', ['phone' => $request->phone]);
    }

    public function verify($phone)
    {
        $tasbih = Tasbih::where('phone', $phone)->first();

        if (!$tasbih) {
            return redirect()->route('tasbih.signup');
        }
        return view('tasbih.verify', ['phone' => $phone]);
    }


    public function verified(Request $request, $phone)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $tasbih = Tasbih::where('phone', $phone)->where('otp', $request->otp)->first();
        if ($tasbih) {
            Auth::guard('tasbih')->login($tasbih);
            return redirect()->route('tasbih');
        } else {
            return redirect()->route('tasbih.verify', ['phone' => $phone])
                ->with(['error' => 'সঠিক ওটিপি দিন']);
        }
    }



    public function tasbih_signin()
    {
        $visibility = TasbihVisibility::first()->status;

        if ($visibility == 0) {
            return redirect()->route('visibility');
        } else {
            if (Auth::guard('tasbih')->check()) {
                return redirect()->route('tasbih');
            } else {
                return view('tasbih.signin');
            }
        }
    }

    public function tasbih_signin_store(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric',
        ]);

        $otp = random_int(10000, 99999);

        $phone = $request->input('phone');

        // Check if the phone number starts with +88 or 88
        if (str_starts_with($phone, '+88')) {
            $phone = substr($phone, 3); // Remove +88
        } elseif (str_starts_with($phone, '88')) {
            $phone = substr($phone, 2); // Remove 88
        }

        // Ensure the phone number is exactly 11 digits
        if (strlen($phone) !== 11) {
            return back()->with(['error_phone' => '১১ ডিজিটের সঠিক নম্বর লিখুন'])
                ->withInput();
        }


        $tasbih = Tasbih::where('phone', $phone)->first();
        if ($tasbih) {
            // Send OTP
            $url = "http://bulksmsbd.net/api/smsapi";
            $api_key = "K9YXIwC5K6nifLYd4XL3";
            $senderid = "8809617624467";
            $number = "$request->phone";
            $message = "মাশুকী দুনিয়ায় আপনায় স্বাগতম ❤️ \nআপনার ওটিপি কোডঃ $otp \n\nবেশুমার শুকরিয়া \nছাত্র আনজুমান";

            $data = [
                "api_key" => $api_key,
                "senderid" => $senderid,
                "number" => $number,
                "message" => $message
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            curl_close($ch);

            $tasbih->update([
                'otp' => $otp
            ]);

            return redirect()->route('tasbih.verify', ['phone' => $phone]);
        } else {

            return redirect()->route('tasbih.signup')
                ->with(['error' => 'এই নাম্বারটি পাওয়া যায়নি']);
        }
    }

    public function tasbih_signout()
    {
        Auth::guard('tasbih')->logout();
        return redirect()->route('tasbih.signin')->with(['error' => 'অতিশীগ্রই লগইন করুন']);
    }

    public function tasbih()
    {

        return view('tasbih.tasbih');
    }

    public function tasbih_count_update(Request $request)
    {
        $user = Auth::guard('tasbih')->user();

        // Calculate the new tasbih count by adding the new count to the current tasbih
        $newTasbih = $user->tasbih + $request->count;

        // Update the database with the new tasbih count
        Tasbih::where('phone', $user->phone)->update([
            'tasbih' => $newTasbih
        ]);

        // Return the updated count as a response
        return response()->json(['success' => true, 'count' => $newTasbih]);
    }

    public function tasbih_list()
    {
        $tasbihs = Tasbih::orderBy('tasbih', 'desc')->get();
        $visibility = TasbihVisibility::first()->status;
        return view('tasbih.tasbih_list', [
            'tasbihs' => $tasbihs,
            'visibility' => $visibility,
        ]);
    }

    public function tasbih_visibility()
    {

        $visibility = TasbihVisibility::first();
        if ($visibility->status == 1) {
            $visibility->update([
                'status' => 0
            ]);
        } else {
            $visibility->update([
                'status' => 1
            ]);
        }
        return redirect()->back();
    }

    public function tasbih_empty()
    {
        Tasbih::query()->update(['tasbih' => 0]);

        return redirect()->back();
    }
}
