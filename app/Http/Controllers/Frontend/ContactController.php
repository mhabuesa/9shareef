<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = rand(0, 1) ? '+' : '-';

        if ($operator === '-' && $num2 > $num1) {
            [$num1, $num2] = [$num2, $num1];
        }

        Session::put('captcha', [
            'num1' => $num1,
            'num2' => $num2,
            'operator' => $operator,
        ]);

        return view('frontend.contact', compact('num1', 'num2', 'operator'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'captcha_answer' => 'required|numeric',
            'n1' => 'required|numeric',
            'n2' => 'required|numeric',
            'op' => 'required|string',
        ]);

        $n1 = $request->n1;
        $n2 = $request->n2;
        $op = $request->op;
        $correct = $op === '+' ? $n1 + $n2 : $n1 - $n2;

        if ((int) $request->captcha_answer !== $correct) {
            return redirect()->back()->with('error', 'Wrong captcha answer!');
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message Sended!');
    }
}
