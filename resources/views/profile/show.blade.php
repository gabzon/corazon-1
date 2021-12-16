<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight h-8">
            {{ __('My profile') }}
        </h2>
    </x-slot>

    <x-slot name="aside">
        @include('user.aside')
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll mb-50">
        <div id="name-email" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')
            @endif
        </div>

        <x-jet-section-border />

        <div id="password" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>
            @endif
        </div>

        <x-jet-section-border />

        <div id="info" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-info-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="address" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-address-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="social" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-social-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="work-status" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-status-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="role" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-rights-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="manager" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.manager-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="instructor" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.instructor-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div id="preferences" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--
            <livewire:user.interested-styles-form :user="$user" /> --}}
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>
            @endif
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            <div class="my-32"></div>
            @endif
        </div>
    </div>

</x-app-layout>