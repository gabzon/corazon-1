<?php

namespace App\Providers;

use App\Contracts\Interestable;
use App\Contracts\Likeable;
use App\Contracts\Registrable;
use App\Models\Registration;
use App\Models\User;
use App\Policies\RegistrationPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [        
        // Registration::class => RegistrationPolicy::class,             
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        
        Gate::define('like', function(User $user, Likeable $likeable){
            if (! $likeable->exists) {
                return Response::deny("Cannot like an object that doesn't exists");
            }
            if ($user->hasLiked($likeable)) {
                return Response::deny("Cannot like the same thing twice");
            }
            return Response::allow();
        });

        Gate::define('unlike', function(User $user, Likeable $likeable){
            if (! $likeable->exists) {
                return Response::deny("Cannot unlike an object that doesn't exists");
            }

            if(! $user->hasLiked($likeable)){
                return Response::deny("Cannot unlike without liking first");
            }
            return Response::allow();
        });

        Gate::define('interest', function(User $user, Interestable $interestable){
            if (! $interestable->exists) {
                return Response::deny("Cannot interest an object that does not exists");
            }
            if ($user->hasInterest($interestable)) {
                return Response::deny("Cannot be interested in the same thing twice");
            }
            return Response::allow();
        });


        Gate::define('uninterest', function(User $user, Interestable $interestable){
            if (! $interestable->exists) {
                return Response::deny("Cannot uninterest an object that do not exists");
            }            
            if (! $user->hasInterest($interestable)) {
                return Response::deny("Cannot uninterest without interesting first");
            }
            return Response::allow();
        }); 
        
    }
}
