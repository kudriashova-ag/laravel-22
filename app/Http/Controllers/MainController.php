<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\PhoneNumber;

class MainController extends Controller
{
    function index() {
        $title = 'Home';
        $subtitle = '<em>This is subtitle</em>';
        $users = ['John', 'Jane', 'Doe'];

        return view('index', compact('title', 'subtitle', 'users'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function sendMail(Request $request)
    {
       $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required',
           'phone' =>  ['required', 'string', new PhoneNumber],
       ]);

       //dd($request->name);
    //    dd($request->all());

       return redirect()->back()->with('success', 'Your message has been sent');
    }

}
