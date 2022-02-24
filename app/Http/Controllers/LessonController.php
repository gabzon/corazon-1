<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonStoreRequest;
use App\Http\Requests\LessonUpdateRequest;
use App\Models\Event;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lessons = Lesson::all();

        return view('lesson.index', compact('lessons'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        
        
        $args = [];
        
        if ($request->has('cid')) {
            $args['cid'] = $request->cid; 
        }   

        if ($request->has('oid')) {            
            $args['oid'] = $request->oid; 
        }

        if ($request->has('event')) {
            $event = Event::with(['courses','organizations'])->findOrFail($request->event);
            $args['event'] = $event;            
        }

        return view('lesson.create', $args);
    }

    /**
     * @param \App\Http\Requests\LessonStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LessonStoreRequest $request)
    {
        $lesson = Lesson::create($request->validated());

        $request->session()->flash('lesson.id', $lesson->id);

        return redirect()->route('lesson.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Lesson $lesson)
    {
        return view('lesson.show', compact('lesson'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Lesson $lesson)
    {
        return view('lesson.edit', compact('lesson'));
    }

    /**
     * @param \App\Http\Requests\LessonUpdateRequest $request
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(LessonUpdateRequest $request, Lesson $lesson)
    {
        $lesson->update($request->validated());

        $request->session()->flash('lesson.id', $lesson->id);

        return redirect()->route('lesson.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Lesson $lesson)
    {
        $lesson->delete();

        return redirect()->route('lesson.index');
    }
}
