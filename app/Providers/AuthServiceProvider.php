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
    }
}
