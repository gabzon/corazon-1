<x-guest-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h1 class="inline-flex text-2xl font-bold leading-7 text-gray-700 sm:text-3xl sm:truncate items-center">
                    @if ($organization->getMedia('organization-icons')->last() != null)
                    <img class="inline-block h-10 w-10 rounded-full mr-2 bg-gray-100" lazy="loading"
                        src="{{ $organization->getMedia('organization-icons')->last()->getUrl() }}"
                        alt="{{ $organization->name }}">
                    @endif
                    {{ $organization->name }}
                </h1>
            </div>
            @auth
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('organization.edit', $organization) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
            </div>
            @endauth
        </div>
    </x-slot>


    <div class="w-full flex flex-wrap">
        <div class="bg-gray-50 w-full md:w-3/4 order-last md:order-first">
            <div class="max-w-full mx-auto my-5 px-3 md:px-6 lg:px-8" x-data="{ orgTabs:'Schedule'}">

                <!-- Tabs -->
                <div class="mt-3 sm:mt-2">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select a tab</label>
                        <select id="tabs" name="tabs"
                            class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option selected>About</option>
                            <option>Courses</option>
                            <option>Favorited</option>
                            <option>Favorited</option>
                            <option>Favorited</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <div class="flex items-center border-b border-gray-200">
                            <nav class="flex-1 -mb-px flex space-x-6 xl:space-x-8" aria-label="Tabs">
                                <!-- Current: "", Default: "border-transparent " -->
                                <button @click="orgTabs = 'Schedule'"
                                    :class="{'border-indigo-500 text-indigo-600':orgTabs === 'Schedule'}"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Schedule
                                </button>
                                <button :class="{'border-indigo-500 text-indigo-600':orgTabs === 'About'}"
                                    @click="orgTabs = 'About'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    About
                                </button>
                                <button @click="orgTabs = 'Locations'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Locations
                                </button>
                                <button @click="orgTabs = 'Instructors'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Instructors
                                </button>
                                <button @click="orgTabs = 'Students'"
                                    :class="{'border-indigo-500 text-indigo-600': orgTabs === 'Students'}"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Students
                                </button>

                                <button @click="orgTabs = 'Prices'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Prices
                                </button>
                            </nav>
                            <div class="hidden ml-6 bg-gray-100 p-0.5 rounded-lg items-center sm:flex">
                                <button type="button"
                                    class="p-1.5 rounded-md text-gray-400 hover:bg-white hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <!-- Heroicon name: solid/view-list -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Use list view</span>
                                </button>
                                <button type="button"
                                    class="ml-0.5 bg-white p-1.5 rounded-md shadow-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <!-- Heroicon name: solid/view-grid -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                    <span class="sr-only">Use grid view</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Schedule'">
                    @include('organization.show.schedule')
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'About'">
                    @include('organization.show.general')
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Students'">
                    <h2 id="gallery-heading" class="sr-only">Students</h2>
                    @include('organization.show.students')
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Instructors'">
                    <h2 id="gallery-heading" class="sr-only">Courses</h2>
                    Instructors
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Locations'">
                    <h2 id="gallery-heading" class="sr-only">Courses</h2>
                    Locations
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Prices'">
                    <h2 id="gallery-heading" class="sr-only">Prices</h2>
                    prices
                    {{-- @include('organization.show.pricing') --}}
                </section>


            </div>
        </div>
        <div class="w-full md:w-1/4">
            @include('organization.show.sidebar')
        </div>
    </div>

</x-guest-layout>