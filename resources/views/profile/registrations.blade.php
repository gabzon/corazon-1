<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('My registrations') }}" />
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-profile.registrations-list :list="$list" :user="auth()->user()" />
            <div class="my-20">&nbsp;</div>
        </div>
    </div>
</x-app-layout>