<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    public function register(Request $request)
    {                 
        auth()->user()->courseRegistrations()->attach($request->id);
        return redirect()->back();    
        
    }

    public function unregister(Request $request)
    {
        $request->user()->courseRegistrations()->detach($request->id);
        return redirect()->back();
    }
}



