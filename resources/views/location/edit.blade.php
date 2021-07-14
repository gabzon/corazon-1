<x-admin-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    {{ __('Edit Location') }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('location.show', $location) }}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm
                font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                focus:ring-offset-2 focus:ring-indigo-500">
                    View
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div x-data="{ tab: 'general' }">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <select id="tabs" name="tabs"
                        class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>General</option>

                        <option>Address</option>

                        <option selected>Social</option>

                        <option>Media</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                            <button @click="tab = 'general'"
                                :class="{ 'border-indigo-500 text-indigo-600': tab === 'general', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab != 'general'}"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                General
                            </button>

                            <button @click="tab = 'address'"
                                :class="{ 'border-indigo-500 text-indigo-600': tab === 'address', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab != 'address'}"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Address
                            </button>

                            <button @click="tab = 'social'"
                                :class="{ 'border-indigo-500 text-indigo-600': tab === 'social', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab != 'social'}"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Social
                            </button>

                            <button @click="tab = 'media'"
                                :class="{ 'border-indigo-500 text-indigo-600': tab === 'media', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab != 'media'}"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Media
                            </button>
                        </nav>
                    </div>
                </div>

                <div x-show="tab === 'general'">
                    <livewire:location.form :location="$location" />
                </div>
                <div x-show="tab === 'address'">
                    <livewire:location.address-form :location="$location" />
                </div>
                <div x-show="tab === 'social'">
                    <livewire:location.social-form :location="$location" />
                </div>
                <div x-show="tab === 'media'">
                    <livewire:location.media-form :location="$location" />
                </div>

            </div>


        </div>
    </div>
</x-admin-layout>