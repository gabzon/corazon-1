<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class EventPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Event $event)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role === 'admin' || $user->role === 'publisher';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Event $event)
    {
        return $user->role === 'admin' || $user->role === 'publisher';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Event $event)
    {
        return $user->role === 'admin' || $user->role === 'publisher';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Event $event)
    {
        return $user->role === 'admin' || $user->role === 'publisher';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Event $event)
    {
        return $user->role === 'admin' || $user->role === 'publisher';
    }

    public function viewInscribed(User $user, Event $event)
    {
        if ($user->role == 'admin' || $event->user_id == $user->id) {
            return true;
        }

        if ($user->isRegisteredInEvent($event)) {
            if ($user->getEventRegistrationRole($event) == 'instructor') {
                return true;
            }            
        }

        if ($event->organizations()->count() > 0) {
            foreach ($event->organizations as $org) {
                return $user->manageOrganization($org->id) || $user->teachInOrganization($org->id);
            }
        }

        return false;        
    }

    public function stats(User $user, Event $event)
    {
        if ($user->role == 'admin' || $event->user_id == $user->id) {
            return true;
        }

        if ($event->organizations()->count() > 0) {
            foreach ($event->organizations as $org) {
                return $user->manageOrganization($org->id);
            }
        }

        return false;     
    }

    public function register(User $user, Event $event)
    {
        if (! $event->exists) {
            return Response::deny("Cannot register to a event that does not exists.");
        }

        if ($user->isRegistered($event)) {
            return Response::deny("Cannot register for the same thing twice");
        }

        return Response::allow();            
    }

    public function unregister(User $user, Event $event)
    {
        if (! $event->exists) {
            return Response::deny("Cannot unregister to a event that does not exists.");
        }

        if (! $user->isRegistered($event)) {
            return Response::deny("Cannot unregister without registering first");
        }

        return Response::allow();
    }

    public function bookmark(User $user, Event $event)
    {
        if (! $event->exists) {
            return Response::deny("Cannot bookmark an event that does not exists");
        }
        
        if ($user->hasBookmarkedEvent($event)) {
            return Response::deny("Cannot bookmark the same event twice");
        }

        return Response::allow();
    }

    public function unbookmark(User $user, Event $event)
    {
        if (! $event->exists) {
            return Response::deny("Cannot unbookmark an event that does not exists");
        }
        
        if (! $user->hasBookmarkedEvent($event)) {
            return Response::deny("Cannot unbookmark without bookmarking first");
        }

        return Response::allow();
    }
}
