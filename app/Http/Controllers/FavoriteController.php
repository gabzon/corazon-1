<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\FavoriteRequest;
use App\Http\Requests\UnfavoriteRequest;

class FavoriteController extends Controller
{

    public function like(FavoriteRequest $request)
    {
        $request->user()->favorite($request->favoritable());

        if ($request->ajax()) {
            return response()->json([
                'favorites' => $request->favoritable()->favorite()->count(),
            ]);
        }

        return redirect()->back();
    }

    public function unlike(UnfavoriteRequest $request, Favorite $favorite)
    {
        $request->user()->unlike($request->favoritable());
        
        if ($request->ajax()) {
            return response()->json([
                'favorites' => $request->favoritable()->favorite()->count(),
            ]);
        }

        return redirect()->back();
    }

}
