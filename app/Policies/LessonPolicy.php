<?php

namespace App\Policies;

use App\Models\User;
use App\Models\lesson;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class LessonPolicy
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
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, lesson $lesson)
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
        if ($user->is_super == true) {
            return true;
        }
        
        if ($user->hasManagementRights()) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, lesson $lesson)
    {
        if ($user->is_super == true) {
            return true;
        }
        
        if ($user->manageOrganization($lesson->organization_id) || $user->teachInOrganization($lesson->organization_id)) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, lesson $lesson)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, lesson $lesson)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, lesson $lesson)
    {
        //
    }

    public function favorite(User $user, lesson $lesson)
    {
        if (! $lesson->exists) {
            return Response::deny("Cannot like an event that does not exists");
        }
        
        
        if ($user->hasFavorited($lesson)) {
            return Response::deny("Cannot like the same event twice");
        }

        return Response::allow();
    }

    public function unfavorite(User $user, lesson $event)
    {
        if (! $event->exists) {
            return Response::deny("Cannot like an event that does not exists");
        }
        
        if (! $user->hasFavorited($event)) {
            return Response::deny("Cannot like without liking first");
        }

        return Response::allow();
    }
}
