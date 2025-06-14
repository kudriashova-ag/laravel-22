<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
