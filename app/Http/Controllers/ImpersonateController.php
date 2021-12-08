<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (! session()->has('impersonate')) {
            abort(403);
        }

        Auth::loginUsingId(session('impersonate'));

        session()->forget('impersonate');
        
        return redirect()->back();
    }
}
