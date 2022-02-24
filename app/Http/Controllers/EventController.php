<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Event::all();

        return view('event.index', compact('events'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)    
    {
        // $this->authorize('create');

        return view('event.create');
    }

    /**
     * @param \App\Http\Requests\EventStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)    
    {
        // $this->authorize('create');

        $event = Event::create($request->validated());

        $request->session()->flash('event.id', $event->id);

        return redirect()->route('event.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Event $event)
    {        
        if (auth()->check()) {
            return view('event.show', compact('event'));
        }
        return view('event.view', compact('event'));        
    }

    public function dashboard(Request $request, Event $event)
    {
        $courses = Course::with('lessons')->where('event_id', $event->id)->get();
        return view('event.dashboard.index',[
            'event' => $event,
            'courses' => $courses,
        ]);
    }

    public function info(Request $request, Event $event)
    {
        return view('event.dashboard.info', compact('event'));
    }

    public function registrations(Request $request, Event $event)
    {        
        return view('event.dashboard.registrations', compact('event'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Event $event)
    {
        // $this->authorize('update', $event);
        
        return view('event.edit', compact('event'));
    }

    /**
     * @param \App\Http\Requests\EventUpdateRequest $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        $this->authorize('update', $event);

        $event->update($request->validated());

        $request->session()->flash('event.id', $event->id);

        return redirect()->route('event.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Event $event)
    {
        $event->delete();

        return redirect()->route('event.index');
    }

    public function catalogue(Request $request)
    {           
        if (auth()->check()) {
            return view('event.catalogue', ['type'=> $request->type]);
        }else{
            return view('pages.events', ['type'=> $request->type]);
        }        
    }
}
