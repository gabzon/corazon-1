<?php

namespace App\Policies;

use App\Models\User;
use App\Models\lesson;
use Illuminate\Auth\Access\HandlesAuthorization;

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
}
