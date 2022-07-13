<?php

namespace App\Policies;

use App\Models\Location;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class LocationPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Location $location)
    {
        //
    }

    public function manage(User $user)
    {
        if ($user->is_super == true || $user->role == 'publisher' || $user->role == 'admin') {
            return true;
        }
        
        return false;    
    }

    public function like(User $user, Location $location)
    {
        if ( !$location->exists ) {
            return Response::deny("Cannot like a location that does not exists");
        }
        // if ($user->hasLiked($location)) {
        //     return Response::deny("Cannot like the same course twice");   
        // }

        // if (!$user->registrationIs($location, 'registered') and !$user->registrationIs($course, 'partial')) {
        //     return Response::deny("Cannot like if not registered");   
        // }

        return Response::allow();
    }
    
    public function unlike(User $user, Location $location)
    {
        if (!$location->exists) {
            return Response::deny("Cannot unlike a location that does not exists");
        }

        // if (!$user->hasLiked($course)) {
        //     return Response::deny("Cannot like without liking it first");
        // }

        return Response::allow();
    }
}
