<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll mb-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')
            @endif
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>
            @endif
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

</x-admin-layout>