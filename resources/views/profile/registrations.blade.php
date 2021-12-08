<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-semibold leading-7 text-gray-800 sm:text-lg sm:truncate">
                    {{ __('My registrations') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-profile.registrations-list :user="auth()->user()" />
        </div>
    </div>
</x-app-layout>