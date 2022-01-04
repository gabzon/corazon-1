<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $courses = Course::all();

        return view('course.index', compact('courses'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('course.create');
    }

    /**
     * @param \App\Http\Requests\CourseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseStoreRequest $request)
    {
        $course = Course::create($request->validated());

        $request->session()->flash('course.id', $course->id);

        return redirect()->route('course.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Course $course)    
    {
        return view('course.view', compact('course'));
    }

    public function dashboard(Request $request, Course $course)
    {
        if (Auth::check() && auth()->user()->isRegisteredInCourse($course)) {
            return view('course.dashboard', compact('course'));   
        }
        return view('course.view', compact('course'));
    }

    public function info(Request $request, Course $course)
    {
        if (Auth::check() && auth()->user()->isRegisteredInCourse($course)) {
            return view('course.info', compact('course'));   
        }
        return view('course.view', compact('course'));
    }

    public function students(Request $request, Course $course)
    {
        if (Auth::check() && auth()->user()->isRegisteredInCourse($course)) {
            return view('course.students', compact('course'));   
        }
        return view('course.view', compact('course'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Course $course)
    {
        return view('course.edit', compact('course'));
    }

    /**
     * @param \App\Http\Requests\CourseUpdateRequest $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, Course $course)
    {
        $course->update($request->validated());

        $request->session()->flash('course.id', $course->id);

        return redirect()->route('course.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        $course->delete();

        return redirect()->route('course.index');
    }

    public function schedule()
    {
        return view('course.schedule');
    }
}
