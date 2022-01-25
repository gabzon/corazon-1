<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {        
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        
    }

    public function bookmarks()    
    {        
        $courses = auth()->user()->bookmarkedCourses;        
        $events = auth()->user()->bookmarkedEvents;     
        $merge = $courses->merge($events);
        $list = $merge->sortBy('start_date')->sortBy('status');

        return view('profile.bookmarks', ['list' => $list]);
    }

    public function registrations()
    {        
        $events = auth()->user()->eventRegistrations;
        $courses = auth()->user()->courseRegistrations;
        $list = $events->merge($courses); 

        return view('profile.registrations', ['list' => $list]);
    }

    public function favorites(Request $request)
    {                
        if ($request->is('profile/favorites/events')) {                        
            $favorites = auth()->user()->favoritesEvents;
            $type = 'registrable';
        } else if ($request->is('profile/favorites/courses')) {
            $favorites = auth()->user()->favoritesCourses;
            $type = 'registrable';
        } else if ($request->is('profile/favorites/organizations')){
            $favorites = auth()->user()->favoritesOrganizations;
            $type = 'organization';
        } else if ($request->is('profile/favorites/lessons')){
            $favorites = auth()->user()->favoritesLessons;
            $type = 'lesson';
        }
       
        return view('profile.favorites',[
            'favorites' => $favorites,
            'type'      => $type,
        ]);
    }




}
