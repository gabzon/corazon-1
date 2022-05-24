<?php

namespace App\Http\Controllers;

use App\Http\Requests\StyleStoreRequest;
use App\Http\Requests\StyleUpdateRequest;
use App\Models\Event;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StyleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $styles = Style::all();

        return view('style.index', compact('styles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('style.create');
    }

    /**
     * @param \App\Http\Requests\StyleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StyleStoreRequest $request)
    {
        $style = Style::create($request->validated());

        $request->session()->flash('style.id', $style->id);

        return redirect()->route('style.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Style $style
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Style $style)
    {
        return view('style.show', compact('style'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Style $style
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Style $style)
    {
        return view('style.edit', compact('style'));
    }

    /**
     * @param \App\Http\Requests\StyleUpdateRequest $request
     * @param \App\Style $style
     * @return \Illuminate\Http\Response
     */
    public function update(StyleUpdateRequest $request, Style $style)
    {
        $style->update($request->validated());

        $request->session()->flash('style.id', $style->id);

        return redirect()->route('style.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Style $style
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Style $style)
    {
        $style->delete();

        return redirect()->route('style.index');
    }

    public function list(Request $request)
    {
        return view('style.list');
    }

    public function view(Request $request, Style $style)    
    {
        return Event::isActive()->select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
        ->groupby('year','month')        
        ->get();;
        return view('style.view', compact('style'));
    }
}
