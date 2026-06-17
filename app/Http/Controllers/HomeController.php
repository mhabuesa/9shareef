<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CompetitionSetting;
use App\Models\Date;
use App\Models\Hijri;
use App\Models\MeeladShareef;
use App\Models\OnlinePostReport;
use App\Models\Participant;
use App\Models\Tasbih;
use App\Models\TasbihVisibility;
use App\Models\UniqueVisitor;
use App\Models\User;
use App\Models\Visibility;
use App\Models\VisitorCount;
use App\Models\Volume;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
{
    // Backend View
    function dashboard()
    {
        $total = VisitorCount::count();
        $unique = UniqueVisitor::count();
        return view('dashboard', [
            'total' => $total,
            'unique' => $unique,
        ]);
    }

    function date()
    {
        $hijri = Hijri::find(1);
        $content1 = Date::find(1);
        //Shaowal Shareef
        $content2 = Date::find(2);
        //volume
        $volume = Volume::find(1);
        return view('admin.date', [
            'content1' => $content1,
            'content2' => $content2,
            'volume' => $volume,
            'hijri' => $hijri,
        ]);
    }

    function user()
    {
        $users = User::all();
        return view('admin.user', [
            'users' => $users,
        ]);
    }



    // Frontend View
    function index(Request $request)
    {

        // All Visitor
        $all_ip = $request->ip();
        VisitorCount::Create(['ip' => $all_ip]);

        // Unique Visitor
        $ip = $request->ip();
        UniqueVisitor::firstOrCreate(['ip' => $ip]);


        $hijri = Hijri::find(1);
        // 9th rwamadan Shareef
        $content1 = Date::find(1);
        //Shaowal Shareef
        $content2 = Date::find(2);
        //volume
        $volume = Volume::find(1);

        return view('frontend.index', [
            'content1' => $content1,
            'content2' => $content2,
            'volume' => $volume,
            'hijri' => $hijri,

        ]);
    }

    function works()
    {
        return view('frontend.works');
    }

    function about()
    {
        return view('frontend.about');
    }
    function contact()
    {
        return view('frontend.contact');
    }

    function category()
    {
        $categories = Category::all();
        return view('admin.category', [
            'categories' => $categories,
        ]);
    }

    function post()
    {
        $categories = Category::all();
        return view('admin.post', [
            'categories' => $categories,
        ]);
    }


    function audio()
    {

        return view('admin.audio');
    }


    function sasCountDown()
    {

        return view('frontend.sasCountDown');
    }







    //meeladShareef
    public function meeladShareef()
    {
        $visibility = Visibility::where('name', 'meeladShareef')->first()?->status;
        if ($visibility == 0) {
            return redirect()->route('visibility');
        }
        return view('meeladShareef.index');
    }

    public function meeladShareef_store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'count' => 'required',
        ]);

        MeeladShareef::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'count' => $request->count,
                'comment' => $request->comment,
            ]
        );

        return redirect()->route('meeladShareef')->with('success', 'আপনার মীলাড শরীফ পাঠ সফলভাবে জমা হয়েছে');
    }

    public function meeladShareef_list()
    {
        $visibility = Visibility::where('name', 'meeladShareef')->value('status');
        $meeladData = MeeladShareef::all();

        $lists = $meeladData->sortByDesc(function ($item) {
            return $this->convertToEnglishNumber($item->count);
        });

        $total = $meeladData->sum(function ($item) {
            return $this->convertToEnglishNumber($item->count);
        });

        return view('meeladShareef.list', compact('lists', 'visibility', 'total'));
    }

    // বাংলা সংখ্যা ইংরেজিতে কনভার্ট করার জন্য আলাদা ফাংশন
    private function convertToEnglishNumber($value)
    {
        $bnDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        $enDigits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $converted = str_replace($bnDigits, $enDigits, $value);
        return is_numeric($converted) ? (int)$converted : 0;
    }




    public function meeladShareef_visibility()
    {
        $visibility = Visibility::where('name', 'meeladShareef')->first();
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

    public function onlinePostReportlist()
    {
        $report = OnlinePostReport::all();

        $lists = $report->sortByDesc(function ($item) {
            return $this->convertToEnglishNumber($item->count);
        });

        $total = $report->sum(function ($item) {
            return $this->convertToEnglishNumber($item->count);
        });

        return view('meeladShareef.postReportList', compact('lists', 'total'));
    }

    public function onlinePost()
    {
        return view('meeladShareef.postReport');
    }
    public function postReport_store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'count' => 'required',
        ]);

        OnlinePostReport::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'count' => $request->count,
                'comment' => $request->comment,
            ]
        );

        return redirect()->route('onlinepost')->with('success', 'রিপোর্ট সাবমিট হয়েছে');
    }




    public function protijogita()
    {
        return view('sas.protijogita');
    }


    public function calculate(Request $request)
    {
        $request->validate([
            'day'   => 'required',
            'month' => 'required',
            'year'  => 'required',
        ]);

        $birthDate = Carbon::createFromDate(
            $request->year,
            $request->month,
            $request->day
        );

        $age = $birthDate->age;

        $setting = CompetitionSetting::first(); // একটাই row ধরলাম

        if (!$setting || !$setting->info_details) {
            return response()->json([
                'status' => false,
                'message' => 'Settings not found'
            ]);
        }

        $groups = $setting->info_details; // already array (cast করলে)

        // বয়স অনুযায়ী group match
        $matchedGroup = collect($groups)->first(function ($group) use ($age) {

            $from = $group['age_from'];
            $to = $group['age_to'];

            if (is_null($to)) {
                return $age >= $from;
            }

            return $age >= $from && $age <= $to;
        });

        if (!$matchedGroup) {
            return response()->json([
                'status' => false,
                'message' => 'No group matched'
            ]);
        }

        return response()->json([
            'status' => true,
            'age' => $age,
            'group' => $matchedGroup['group_name'],
            'fee' => $matchedGroup['fee'],
            'topic' => $matchedGroup['waz_topic'],
        ]);
    }

    public function protijogita_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'profile_id' => 'required|unique:participants,profile_id',
            'day'   => 'required',
            'month' => 'required',
            'year'  => 'required',
            'topics' => 'required|array|min:1',
        ]);

        $birthDate = Carbon::createFromDate(
            $request->year,
            $request->month,
            $request->day
        );

        $age = $birthDate->age;

        $setting = CompetitionSetting::first(); // একটাই row ধরলাম

        if (!$setting || !$setting->info_details) {
            return response()->json([
                'status' => false,
                'message' => 'Settings not found'
            ]);
        }

        $groups = $setting->info_details; // already array (cast করলে)

        // বয়স অনুযায়ী group match
        $matchedGroup = collect($groups)->first(function ($group) use ($age) {

            $from = $group['age_from'];
            $to = $group['age_to'];

            if (is_null($to)) {
                return $age >= $from;
            }

            return $age >= $from && $age <= $to;
        });

        if (!$matchedGroup) {
            return response()->json([
                'status' => false,
                'message' => 'No group matched'
            ]);
        }


        dd($request->address);

        
        $participant = Participant::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'profile_id' => $request->profile_id,
            'address' => $request->address,
            'dob' => $birthDate->format('Y-m-d'),
            'age' => $age,
            'group' => $matchedGroup['group_name'],
            'fee' => $matchedGroup['fee'],
            'waz_topic' => $matchedGroup['waz_topic'],
        ]);

        foreach ($request->topics as $topic) {
            $participant->topics()->create([
                'topic_id' => $topic,
            ]);
        }







        dd($matchedGroup['group_name']);
    }
}