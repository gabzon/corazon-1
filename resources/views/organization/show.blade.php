<x-admin-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between bg-white">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    {{ __('Organizations') }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('organization.create') }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Organization
                </a>
            </div>
        </div>
    </x-slot>

    <main class="flex">
        <main class="flex-1 overflow-y-auto">
            <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ orgTabs:'General'}">


                <!-- Tabs -->
                <div class="mt-3 sm:mt-2">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select a tab</label>
                        <select id="tabs" name="tabs"
                            class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option selected>General</option>
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
                                <button :class="{'border-indigo-500 text-indigo-600':orgTabs === 'General'}"
                                    @click="orgTabs = 'General'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    General
                                </button>
                                <button @click="orgTabs = 'Courses'"
                                    :class="{'border-indigo-500 text-indigo-600':orgTabs === 'Courses'}"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Courses
                                </button>
                                <button @click="orgTabs = 'Students'"
                                    :class="{'border-indigo-500 text-indigo-600': orgTabs === 'Students'}"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Students
                                </button>
                                <button @click="orgTabs = 'Instructors'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Instructors
                                </button>
                                <button @click="orgTabs = 'Locations'"
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Locations
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

                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'General'">
                    <h2 id="gallery-heading" class="sr-only">Recently viewed</h2>
                    <ul role="list"
                        class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        <li class="relative">
                            <!-- Current: "ring-2 ring-offset-2 ring-indigo-500", Default: "focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500" -->
                            <div
                                class="ring-2 ring-offset-2 ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                                <!-- Current: "", Default: "group-hover:opacity-75" -->
                                <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
                                    alt="" class="object-cover pointer-events-none">
                                <button type="button" class="absolute inset-0">
                                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                                </button>
                            </div>
                            <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                IMG_4985.HEIC</p>
                            <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                        </li>

                        <!-- More files... -->
                    </ul>
                </section>

                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Courses'">
                    <h2 id="gallery-heading" class="sr-only">Courses</h2>
                    Courses
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Students'">
                    <h2 id="gallery-heading" class="sr-only">Courses</h2>
                    Students
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Instructors'">
                    <h2 id="gallery-heading" class="sr-only">Courses</h2>
                    Instructors
                </section>
                <section class="mt-8 pb-16" aria-labelledby="gallery-heading" x-show="orgTabs === 'Locations'">
                    <h2 id="gallery-heading" class="sr-only">Courses</h2>
                    Locations
                </section>
            </div>
        </main>








        <!-- Secondary column (hidden on smaller screens) -->
        <aside class="hidden w-96 p-8 bg-white border-l border-gray-200 overflow-y-auto lg:block">
            <x-organization.description-card :org="$organization" />
            <div class="pb-16 space-y-6">
                <div>
                    <h3 class="font-medium text-gray-900">Managers</h3>
                    <ul class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                        <li class="py-3 flex justify-between items-center">
                            <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=1024&h=1024&q=80"
                                    alt="" class="w-8 h-8 rounded-full">
                                <p class="ml-4 text-sm font-medium text-gray-900">Aimee Douglas</p>
                            </div>
                            <button type="button"
                                class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                    class="sr-only"> Aimee Douglas</span></button>
                        </li>

                        <li class="py-3 flex justify-between items-center">
                            <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=oilqXxSqey&ixqx=e9dAUWMFk3&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="w-8 h-8 rounded-full">
                                <p class="ml-4 text-sm font-medium text-gray-900">Andrea McMillan</p>
                            </div>
                            <button type="button"
                                class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                    class="sr-only"> Andrea McMillan</span></button>
                        </li>

                        <li class="py-2 flex justify-between items-center">
                            <button type="button"
                                class="group -ml-1 bg-white p-1 rounded-md flex items-center focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <span
                                    class="w-8 h-8 rounded-full border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">
                                    <!-- Heroicon name: solid/plus -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-sm font-medium text-indigo-600 group-hover:text-indigo-500">Share</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="flex">
                    <button type="button"
                        class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Download
                    </button>
                    <button type="button"
                        class="flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Delete
                    </button>
                </div>
            </div>
        </aside>

    </main>
</x-admin-layout>