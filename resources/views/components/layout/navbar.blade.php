<header class="flex-shrink-0 relative h-16 bg-white flex items-center" x-data="{ mobileMenu: false }">
    <!-- Logo area -->
    <div class="absolute inset-y-0 left-0 md:static md:flex-shrink-0">
        <a href="/"
            class="flex items-center justify-center h-16 w-16 bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 md:w-20 hover:bg-indigo-400">
            <x-jet-application-mark class="block h-6 w-auto text-indigo-200" />
        </a>
    </div>

    <!-- Picker area -->
    {{-- <div class="mx-auto md:hidden">
        <div class="relative">
            <label for="inbox-select" class="sr-only">Choose inbox</label>
            <select id="inbox-select"
                class="rounded-md border-0 bg-none pl-3 pr-8 text-base font-medium text-gray-900 focus:ring-2 focus:ring-indigo-600">
                <option>Open</option>

                <option>Archive</option>

                <option>Customers</option>

                <option>Flagged</option>

                <option>Spam</option>

                <option>Drafts</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center justify-center pr-2">
                <!-- Heroicon name: solid/chevron-down -->
                <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div> --}}

    <!-- Menu button area -->
    <div class="absolute inset-y-0 right-0 pr-4 flex items-center sm:pr-6 md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="mobileMenu=true"
            class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
            <span class="sr-only">Open main menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Desktop nav area -->
    <div class="hidden md:min-w-0 md:flex-1 md:flex md:items-center md:justify-between">
        <div class="min-w-0 flex-1">
            {{-- <div class="max-w-2xl relative text-gray-400 focus-within:text-gray-500">
                <label for="search" class="sr-only">Search</label>
                <input id="search" type="search" placeholder="Search"
                    class="block w-full border-transparent pl-12 placeholder-gray-500 focus:border-transparent sm:text-sm focus:ring-0">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center justify-center pl-4">
                    <!-- Heroicon name: solid/search -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div> --}}
        </div>
        <div class="ml-10 pr-4 flex-shrink-0 flex items-center space-x-10">
            <nav aria-label="Global" class="flex space-x-4">
                {{-- <a href="{{ route('schedule') }}"
                class="text-sm font-medium text-gray-900 p-2 hover:bg-gray-100 rounded-lg">Courses</a> --}}
                {{-- <a href="#" class="text-sm font-medium text-gray-900 p-2 hover:bg-gray-100 rounded-lg">
                    Events
                </a> --}}
                {{-- <a href="#" class="text-sm font-medium text-gray-900 p-2 hover:bg-gray-100 rounded-lg">Blog</a> --}}
            </nav>
            <div class="flex items-center space-x-8">
                {{-- <span class="inline-flex">
                    <a href="#" class="-mx-1 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </a>
                </span> --}}

                <div class="relative inline-block text-left">
                    @auth
                    <x-layout.user-dropdown />
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide this `div` based on menu open/closed state -->

    <div x-show="mobileMenu" class="fixed inset-0 z-40 md:hidden" role="dialog" aria-modal="true">
        <!-- Off-canvas menu overlay, show/hide based on off-canvas menu state. -->
        <!-- Entering: "transition-opacity ease-linear duration-300" From: "opacity-0" To: "opacity-100" -->
        <!-- Leaving: "transition-opacity ease-linear duration-300" From: "opacity-100" To: "opacity-0" -->

        <div class="hidden sm:block sm:fixed sm:inset-0 sm:bg-gray-600 sm:bg-opacity-75" aria-hidden="true">
        </div>

        <!-- Mobile menu, toggle classes based on menu state. -->
        <!-- Entering: "transition ease-out duration-150 sm:ease-in-out sm:duration-300" From: "transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100" -->
        <!-- To: "transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100" Leaving: "transition ease-in duration-150 sm:ease-in-out sm:duration-300" -->
        <!-- From: "transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100" To: "transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100" -->

        <nav class="fixed z-40 inset-0 h-full w-full bg-white sm:inset-y-0 sm:left-auto sm:right-0 sm:max-w-sm sm:w-full sm:shadow-lg"
            aria-label="Global">
            <div class="h-16 flex items-center justify-between px-4 sm:px-6">
                <a href="#">
                    <img class="block h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500" alt="Workflow">
                </a>
                <button type="button" @click="mobileMenu=false"
                    class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-2 max-w-8xl mx-auto px-4 sm:px-6">
                <div class="relative text-gray-400 focus-within:text-gray-500">
                    <label for="search" class="sr-only">Search all inboxes</label>
                    <input id="search" type="search" placeholder="Search all inboxes"
                        class="block w-full border-gray-300 rounded-md pl-10 placeholder-gray-500 focus:border-indigo-600 focus:ring-indigo-600">
                    <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-3">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="max-w-8xl mx-auto py-3 px-2 sm:px-4">

                <a href="{{ route('schedule') }}"
                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Home</a>

                <a href="#"
                    class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Technical
                    Support</a>

                <a href="#"
                    class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Sales</a>

                <a href="#"
                    class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">General</a>

                <a href="#"
                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Reporting</a>

                <a href="#"
                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Settings</a>
            </div>
            <div class="border-t border-gray-200 pt-4 pb-3">
                <div class="max-w-8xl mx-auto px-4 flex items-center sm:px-6">
                    <div class="flex-shrink-0">
                        {{-- <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="">
                        --}}
                    </div>
                    <div class="ml-3 min-w-0 flex-1">
                        {{-- <div class="text-base font-medium text-gray-800 truncate">{{ auth()->user()->name }}</div>
                    --}}
                    {{-- <div class="text-sm font-medium text-gray-500 truncate">{{ auth()->user()->email }}
                </div> --}}
            </div>
            <a href="#" class="ml-auto flex-shrink-0 bg-white p-2 text-gray-400 hover:text-gray-500">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </a>
    </div>
    <div class="mt-3 max-w-8xl mx-auto px-2 space-y-1 sm:px-4">
        <a href="{{ route('profile.show') }}"
            class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Your
            Profile</a>

        <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Sign
            out</a>
    </div>
    </div>
    </nav>
    </div>
</header>