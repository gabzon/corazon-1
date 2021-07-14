<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = City::all();

        return view('city.index', compact('cities'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('city.create');
    }

    /**
     * @param \App\Http\Requests\CityStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityStoreRequest $request)
    {
        $city = City::create($request->validated());

        $request->session()->flash('city.id', $city->id);

        return redirect()->route('city.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\City $city
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, City $city)
    {
        return view('city.show', compact('city'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\City $city
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, City $city)
    {
        return view('city.edit', compact('city'));
    }

    /**
     * @param \App\Http\Requests\CityUpdateRequest $request
     * @param \App\City $city
     * @return \Illuminate\Http\Response
     */
    public function update(CityUpdateRequest $request, City $city)
    {
        $city->update($request->validated());

        $request->session()->flash('city.id', $city->id);

        return redirect()->route('city.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\City $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, City $city)
    {
        $city->delete();

        return redirect()->route('city.index');
    }
}
