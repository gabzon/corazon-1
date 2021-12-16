<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkEventController extends Controller
{
    public function bookmark(Request $request)
    {
        auth()->user()->bookmarkEvents()->attach($request->id);
        return redirect()->back();
    }

    public function unbookmark(Request $request)
    {
        auth()->user()->bookmarkEvents()->detach($request->id);
        return redirect()->back();
    }
}


