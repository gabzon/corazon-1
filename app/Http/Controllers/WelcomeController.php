<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $item = \App\Models\Event::find(1);        
        return view('welcome', ['mymedia'=> $item->getMedia('events')->last()]);
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
