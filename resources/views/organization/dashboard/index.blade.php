<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $organization->name}}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                {{-- @can('update', $course) --}}
                {{-- <a href="{{ route('organization.edit', $organization) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a> --}}
                {{-- @endcan --}}
            </div>
        </div>
    </x-slot>

    <div class="max-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-full lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('organization.dashboard.nav')
            </div>
            <main class="lg:col-span-9 xl:col-span-6">
                <div class="py-4 sm:py-6 md:py-8 lg:py-10">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">Organization Management</h2>
                        <p class="mt-1 text-sm text-gray-500">You haven’t created a project yet. Get started by
                            selecting a template or start from an empty project.</p>
                        <ul role="list"
                            class="mt-6 border-t border-b border-gray-200 py-6 grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <li class="flow-root">
                                <div
                                    class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-pink-500">
                                        <!-- Heroicon name: outline/view-list -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                Create an event<span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Another to-do system you’ll try but
                                            eventually give up on.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="flow-root">
                                <div
                                    class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-green-500">
                                        <!-- Heroicon name: outline/calendar -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                Create a course<span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Add a new class to your Schedule</p>
                                    </div>
                                </div>
                            </li>

                            <li class="flow-root">
                                <div
                                    class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-green-500">
                                        <!-- Heroicon name: outline/photograph -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                Create a Gallery<span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Great for mood boards and inspiration.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="flow-root">
                                <div
                                    class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-blue-500">
                                        <!-- Heroicon name: outline/view-boards -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                Create a Board<span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Track tasks in different stages of your
                                            project.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="flow-root">
                                <div
                                    class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-indigo-500">
                                        <!-- Heroicon name: outline/table -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                Create a Spreadsheet<span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Lots of numbers and things — good for
                                            nerds.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="flow-root">
                                <div
                                    class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-purple-500">
                                        <!-- Heroicon name: outline/clock -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                Create a Timeline<span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Get a birds-eye-view of your
                                            procrastination.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-4 flex">
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Or start from
                                an empty project<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>

                </div>
            </main>
            <aside class="hidden xl:block xl:col-span-4 py-4 sm:py-6 md:py-8 lg:py-10 border">
                Area to be defined
            </aside>
        </div>
    </div>

</x-app-layout>