<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookmarkRequest;
use App\Http\Requests\UnbookmarkRequest;

class BookmarkController extends Controller
{
    public function bookmark(BookmarkRequest $request)    
    {                
        $request->user()->bookmark($request->bookmarkable());        
        return redirect()->back();
    }

    public function unbookmark(UnbookmarkRequest $request)
    {
        auth()->user()->unbookmark($request->bookmarkable());
        return redirect()->back();
    }
}