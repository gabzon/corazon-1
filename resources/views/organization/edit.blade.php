<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('Edit Organization') }}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <x-ui.button route="{{ route('organization.view', $organization) }}" css="ml-3">
                    View
                </x-ui.button>
            </div>
        </div>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:organization.form.default-form :organization="$organization" />
            </div>
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:organization.form.general-form :organization="$organization" />
            </div>
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:organization.form.address-form :organization="$organization" />
            </div>
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:shared.social-media-form :model="$organization" />
            </div>
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:organization.form.team :organization="$organization" />
            </div>
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:shared.styles-form :model="$organization" />
            </div>
        </div>
        <div class="my-28"></div>
    </div>
</x-admin-layout>