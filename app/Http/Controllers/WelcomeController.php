<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function terms()
    {
        return view('terms');
    }
    
    public function policy()
    {
        return view('policy');
    }

}
