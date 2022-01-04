<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UninterestRequest;
use App\Http\Requests\UnregisterRequest;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(RegisterRequest $request)
    {                
        $request->user()->register($request->registrable());

        if ($request->ajax()) {
            return response()->json(['registrations' => $request->registrable()->registrations()->count()]);
        }
        
        return redirect()->back();
    }

    public function unregister(UnregisterRequest $request)    
    {        
        $request->user()->unregister($request->registrable());

        if ($request->ajax()) {
            return response()->json(['registrations' => $request->registrable()->registrations()->count()]);
        }
        
        return redirect()->back();
    }
}