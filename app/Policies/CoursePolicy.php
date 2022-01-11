<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CoursePolicy
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
    public function view(User $user, Course $course)
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
        return $user->is_super == true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Course $course)
    {        
        if ($user->is_super == true){
            return Response::allow();
        }

        if ($user->manageOrganization($course->organization_id)) {
            return Response::allow();
        }

        return Response::deny('You are not allow to update this course');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Course $course)
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
    public function restore(User $user, Course $course)
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
    public function forceDelete(User $user, Course $course)
    {
        //
    }

    public function manage(User $user)
    {
        return $user->is_super == true;
    }

    public function dashboard(User $user, Course $course)
    {
        if ($user->role == 'admin' || $user->is_super == true) {
            return Response::allow();
        }

        if ($user->manageOrganization($course->organization_id)) {
            return Response::allow();
        }

        if ($user->registrationIs($course, 'registered') || $user->registrationIs($course, 'partial') || $user->registrationIs($course, 'partial')) {
            return Response::allow();   
        }

        return false;
    }

    public function register(User $user, Course $course)
    {
        if (!$course->exists) {
            return Response::deny("Cannot register to a course that does not exists.");
        }

        if ($user->isRegistered($course)) {
            return Response::deny("Cannot register for the same thing twice");
        }

        return Response::allow();
    }

    public function unregister(User $user, Course $course)
    {
        if (!$course->exists) {
            return Response::deny("Cannot unregister to a course that does not exists.");
        }

        if (!$user->isRegistered($course)) {
            return Response::deny("Cannot unregister without registering first");
        }

        return Response::allow();
    }

    public function bookmark(User $user, Course $course)
    {
        if (! $course->exists) {
            return Response::deny("Cannot bookmark a course that does not exists");
        }

        if ($user->hasBookmarked($course)) {
            return Response::deny("Cannot bookmark the same course twice");
        }

        return Response::allow();
    }

    public function unbookmark(User $user, Course $course)
    {
        if (!$course->exists) {
            return Response::deny("Cannot unbookmark a course that does not exists");
        }

        if (!$user->hasBookmarked($course)) {
            return Response::deny("Cannot unbookmark without bookmarking first");
        }

        return Response::allow();
    }

    public function favorite(User $user, Course $course)
    {
        if ( !$course->exists ) {
            return Response::deny("Cannot like a course that does not exists");
        }
        if ($user->hasFavorited($course)) {
            return Response::deny("Cannot like the same course twice");   
        }

        if (!$user->registrationIs($course, 'registered') and !$user->registrationIs($course, 'partial')) {
            return Response::deny("Cannot like if not registered");   
        }

        return Response::allow();
    }
    
    public function unfavorite(User $user, Course $course)
    {
        if (!$course->exists) {
            return Response::deny("Cannot unlike a course that does not exists");
        }

        if (!$user->hasFavorited($course)) {
            return Response::deny("Cannot like without liking it first");
        }

        return Response::allow();
    }
}
