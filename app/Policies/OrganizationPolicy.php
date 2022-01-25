<?php

namespace App\Policies;

use App\Models\User;
use App\Models\organization;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OrganizationPolicy
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
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, organization $organization)
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
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, organization $organization)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, organization $organization)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, organization $organization)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, organization $organization)
    {
        //
    }

    public function manage(User $user)
    {
        return $user->is_super == true;
    }

    public function favorite(User $user, organization $organization)
    {
        if (! $organization->exists) {
            return Response::deny("Cannot like an event that does not exists");
        }
        
        if ($user->hasFavorited($organization)) {
            return Response::deny("Cannot like the same organization twice");
        }

        return Response::allow();
    }

    public function unfavorite(User $user, organization $organization)
    {
        if (! $organization->exists) {
            return Response::deny("Cannot like an organization that does not exists");
        }
        
        if (! $user->hasFavorited($organization)) {
            return Response::deny("Cannot like without liking first");
        }

        return Response::allow();
    }
}
