<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    public function register(Request $request)
    {         
        auth()->user()->eventRegistrations()->attach($request->id);
        return redirect()->back();    
        
    }

    public function unregister(Request $request)
    {
        $request->user()->eventRegistrations()->detach($request->id);
        return redirect()->back();
    }
}



