<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Models\CourseRegistration;
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
        $this->authorize('manage', Course::class);
        
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
        if (auth()->check()) {
            return view('course.show', compact('course'));
        }
        return view('course.view', compact('course'));
    }

    public function dashboard(Request $request, Course $course)
    {        
        if (auth()->user()->cannot('dashboard', $course)) {                        
            return view('course.show', compact('course'));           
        }        
        return view('course.dashboard.index', compact('course'));             
    }

    public function info(Request $request, Course $course)
    {        
        return view('course.dashboard.info', compact('course'));                   
    }

    public function students(Request $request, Course $course)
    {                        
        return view('course.dashboard.students', compact('course'));                   
    }

    public function stats(Request $request, Course $course)
    {        
        return view('course.dashboard.stats', compact('course'));                   
    }
    
    public function bookmarks(Request $request, Course $course)
    {        
        return view('course.dashboard.bookmarks', compact('course'));                   
    }

    public function favorites(Request $request, Course $course)
    {        
        return view('course.dashboard.favorites', compact('course'));                   
    }

    public function registrations(Request $request, Course $course)
    {        
        return view('course.dashboard.registrations', compact('course'));                   
    }

    public function edit(Request $request, Course $course)
    {
        return view('course.edit', compact('course'));
    }

    public function update(CourseUpdateRequest $request, Course $course)
    {
        $course->update($request->validated());

        $request->session()->flash('course.id', $course->id);

        return redirect()->route('course.index');
    }

    public function destroy(Request $request, Course $course)
    {
        $course->delete();

        return redirect()->route('course.index');
    }

    public function catalogue()
    {
        if (auth()->check()) {
            return view('course.catalogue');
        }else{
            return view('pages.courses');
        }           
    }
}


