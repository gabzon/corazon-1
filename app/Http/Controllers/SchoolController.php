<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolStoreRequest;
use App\Http\Requests\SchoolUpdateRequest;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{


    /**
     * @param \App\Http\Requests\SchoolStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolStoreRequest $request)
    {
        $school = School::create($request->validated());

        $request->session()->flash('school.id', $school->id);

        return redirect()->route('school.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, School $school)
    {
        return view('school.show', compact('school'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, School $school)
    {
        return view('school.edit', compact('school'));
    }

    /**
     * @param \App\Http\Requests\SchoolUpdateRequest $request
     * @param \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolUpdateRequest $request, School $school)
    {
        $school->update($request->validated());

        $request->session()->flash('school.id', $school->id);

        return redirect()->route('school.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, School $school)
    {
        $school->delete();

        return redirect()->route('school.index');
    }
}
