<?php

namespace App\Http\Controllers;

use App\Models\Space;
use App\Http\Requests\ClassroomStoreRequest;
use App\Http\Requests\ClassroomUpdateRequest;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $classrooms = Space::all();

        return view('classroom.index', compact('classrooms'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)    
    {
        return view('space.create')->with('location', $request->location);
    }

    /**
     * @param \App\Http\Requests\ClassroomStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomStoreRequest $request)
    {
        $classroom = Space::create($request->validated());

        $request->session()->flash('space.id', $classroom->id);

        return redirect()->route('space.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Classroom $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Space $space)
    {        
        return view('space.show', compact('space'))->with('photos', $space->getMedia('spaces'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Classroom $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Space $space)
    {
        return view('space.edit', compact('space'));
    }

    /**
     * @param \App\Http\Requests\ClassroomUpdateRequest $request
     * @param \App\Classroom $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(ClassroomUpdateRequest $request, Space $space)
    {
        $space->update($request->validated());

        $request->session()->flash('space.id', $space->id);

        return redirect()->route('space.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Classroom $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Space $space)
    {
        $space->delete();

        return redirect()->route('space.index');
    }
}
