<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function fbLogin()
    {
        return view('auth.fb-login');
    }

    public function sources()
    {
        return view('pages.sources');
    }

}
