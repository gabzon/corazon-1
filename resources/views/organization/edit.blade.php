<x-admin-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    {{ __('Add organization') }}
                </h2>
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
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:organization.form :organization="$organization" />
            </div>
            <div class="my-36"></div>
        </div>
    </div>
</x-admin-layout>