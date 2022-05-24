<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $organization = Organization::all();

        return view('organization.index', compact('organization'));    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {                
        return view('organization.show')->with('organization', $organization);        
    }

    public function view(Organization $organization)
    {        
        $org = Organization::with(['events','courses','teachers', 'media'])->whereId($organization->id)->first();
        
        if ($org->events->count() > 0) {
            $org->load(['events' => function($query){
                $query->where('status','active');
            }]);
        }

        $schedule = [
            'organization'  => $org,
            'mondays'       => $org->courses()->where('type','class')->where('status','active')->where('monday', 1)->orderBy('start_time_mon')->get(),
            'tuesdays'      => $org->courses()->where('type','class')->where('status','active')->where('tuesday', 1)->orderBy('start_time_tue')->get(),
            'wednesdays'    => $org->courses()->where('type','class')->where('status','active')->where('wednesday',1)->orderBy('start_time_wed')->get(),
            'thursdays'     => $org->courses()->where('type','class')->where('status','active')->where('thursday',1)->orderBy('start_time_thu')->get(),
            'fridays'       => $org->courses()->where('type','class')->where('status','active')->where('friday', 1)->orderBy('start_time_fri')->get(),
            'saturdays'     => $org->courses()->where('type','class')->where('status','active')->where('saturday', 1)->orderBy('start_time_sat')->get(),
            'sundays'       => $org->courses()->where('type','class')->where('status','active')->where('sunday', 1)->orderBy('start_time_sat')->get(),
        ];
        
        if (auth()->check()) {
            return view('organization.view')->with($schedule);        
        }       
        return view('organization.guest')->with($schedule); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('organization.edit')->with('organization', $organization);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }

    public function dashboard(Organization $organization)
    {
        return view('organization.dashboard.index', compact('organization'));           
    }
    
    public function members(Organization $organization)
    {
        return view('organization.dashboard.members', compact('organization'));
    }

    public function courses(Organization $organization)
    {
        return view('organization.dashboard.courses', compact('organization'));
    }

    public function events(Organization $organization)
    {
        return view('organization.dashboard.events', compact('organization'));
    }

    public function settings(Organization $organization)
    {
        return view('organization.dashboard.settings', compact('organization'));
    }

    public function list(Request $request)
    {
        $organization = Organization::where('type','school');

        return view('organization.list', compact('organization'));    
    }
    
}
