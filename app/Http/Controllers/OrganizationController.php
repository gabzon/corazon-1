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
        $org = Organization::with(['events','courses','teachers'])->whereId($organization->id)->first();
        $schedule = [
            'organization'  => $org,
            'mondays'       => $org->courses()->where('status','active')->where('monday', 1)->orderBy('start_time_mon')->get(),
            'tuesdays'      => $org->courses()->where('status','active')->where('tuesday', 1)->orderBy('start_time_tue')->get(),
            'wednesdays'    => $org->courses()->where('status','active')->where('wednesday',1)->orderBy('start_time_wed')->get(),
            'thursdays'     => $org->courses()->where('status','active')->where('thursday',1)->orderBy('start_time_thu')->get(),
            'fridays'       => $org->courses()->where('status','active')->where('friday', 1)->orderBy('start_time_fri')->get(),
            'saturdays'     => $org->courses()->where('status','active')->where('saturday', 1)->orderBy('start_time_sat')->get(),
            'sundays'       => $org->courses()->where('status','active')->where('sunday', 1)->orderBy('start_time_sat')->get(),
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
        return view('organization.dashboard', compact('organization'));   
    }
}
