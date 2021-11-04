<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Event;
// use Orion\Concerns\DisableAuthorization;
// use Orion\Http\Controllers\Controller;

class EventController extends Controller
{
    // use DisableAuthorization;    
    // protected $model = Event::class;

    public function index(){
        
        $collection = Event::with(['city:id,name,alpha2Code','location:id,name,shortname,neighborhood', 'media', 'styles:name'])
                            ->select(['id','name','tagline','start_date','end_date', 'start_time','end_time','thumbnail','type', 'location_id', 'city_id'])
                            ->whereStatus('active')
                            ->orderBy('start_date','asc')
                            ->get();
        
        return EventResource::collection($collection);        
    }

    public function parties(){
        
        $collection = Event::with(['city:id,name,alpha2Code', 'location:id,name,shortname,neighborhood', 'media', 'styles:name'])
                            ->select(['id','name','tagline','start_date','end_date', 'start_time','end_time','thumbnail','type', 'location_id', 'city_id'])
                            ->whereType('party')
                            ->whereStatus('active')
                            ->orderBy('start_date','asc')
                            ->get();
        
        return EventResource::collection($collection);
    }

    public function workshops(){
        
        $collection = Event::with(['city:id,name,alpha2Code', 'location:id,name,shortname,neighborhood', 'media', 'styles:name'])
                            ->select(['id','name','tagline','start_date','end_date', 'start_time','end_time','thumbnail','type', 'location_id', 'city_id'])
                            ->whereType('workshop')
                            ->whereStatus('active')
                            ->orderBy('start_date','asc')
                            ->get();
        
        return EventResource::collection($collection);
    }

    public function festivals(){
        
        $collection = Event::with(['city:id,name,alpha2Code', 'location:id,name,shortname,neighborhood', 'media', 'styles:name'])
                            ->select(['id','name','tagline','start_date','end_date', 'start_time','end_time','thumbnail','type', 'location_id', 'city_id'])
                            ->whereType('festival')
                            ->whereStatus('active')
                            ->orderBy('start_date','asc')
                            ->get();
        
        return EventResource::collection($collection);
    }
    

    // public function store(Request $request){}

    public function show(int $id)
    {
        $event = Event::find($id);
        if (!$event) {
            abort(404, 'Event not found');
        }
        return new EventResource($event);
    }

    // public function update(Request $request, $id){}

    // public function destroy($id){}
}


