<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestRequest;
use App\Http\Requests\UninterestRequest;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{

    public function interest(InterestRequest $request)
    {        
        $request->user()->interest($request->interestable());

        if ($request->ajax()) {
            return response()->json(['interests' => $request->interestable()->interests()->count()]);
        }
        
        return redirect()->back();
    }

    public function uninterest(UninterestRequest $request)
    {
        $request->user()->uninterest($request->interestable());

        if ($request->ajax()) {
            return response()->json(['interests' => $request->interestable()->interests()->count()]);
        }

        return redirect()->back();
    }


}
