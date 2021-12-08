<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
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
        $this->authorize('create');

        return view('event.create');
    }

    /**
     * @param \App\Http\Requests\EventStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)    
    {
        $this->authorize('create');

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
        return view('event.show', compact('event'));
    }

    public function view(Request $request, Event $event)
    {        
        return view('event.view', compact('event'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Event $event)
    {
        $this->authorize('update', $event);
        
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

    public function catalogue()
    {
        if (auth()->check()) {
            return view('event.catalogue');
        }else{
            return view('pages.events');
        }
        
    }
}
