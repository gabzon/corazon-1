<x-app-layout>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">

        <main class="bg-gray-100 bg-opacity-25">

            <div class="lg:w-8/12 lg:mx-auto mb-8">

                <header class="flex flex-wrap items-center p-4 md:py-8">

                    <div class="md:w-3/12 md:ml-16">
                        <!-- profile image -->
                        <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                       border-2 {{ $user->gender == 'male' ? 'border-indigo-600' : 'border-pink-600'}} p-1"
                            src="{{ $user->avatar ?? $user->profile_photo_url }}" alt="profile">
                    </div>

                    <!-- profile meta -->
                    <div class="w-8/12 md:w-7/12 ml-4">
                        <div class="md:flex md:flex-wrap md:items-center mb-4">
                            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
                                {{ $user->name }}
                            </h2>
                        </div>

                        <!-- post, following, followers list for medium screens -->
                        <ul class="hidden md:flex space-x-8 mb-4">
                            <li>
                                <span class="font-semibold">136</span>
                                courses
                            </li>

                            <li>
                                <span class="font-semibold">40.5k</span>
                                events
                            </li>
                            <li>
                                <span class="font-semibold">302</span>
                                following
                            </li>
                        </ul>

                        <!-- user meta form medium screens -->
                        <div class="hidden md:block">
                            <h1 class="font-semibold">{{ '@' . $user->username }}</h1>
                            <span>Travel, Nature and Music</span>
                            <p>{{ $user->biography }}</p>
                        </div>

                    </div>

                    <!-- user meta form small screens -->
                    <div class="md:hidden text-sm my-2">
                        <h1 class="font-semibold">{{ '@' . $user->username }}</h1>
                        <span>Travel, Nature and Music</span>
                        <p>{{ $user->biography }}</p>
                    </div>

                </header>
            </div>
        </main>

        <div>
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                <select id="tabs" name="tabs"
                    class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    <option>My Account</option>

                    <option>Company</option>

                    <option selected>Team Members</option>

                    <option>Billing</option>
                </select>
            </div>

            <div class="hidden sm:block" x-data="{ tab: 'account' }">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8 justify-center" aria-label="Tabs">
                        <a :class="{ 'text-indigo-600 border-indigo-500': tab === 'account', 'text-gray-400 group-hover:text-gray-500' : tab != 'account' }"
                            x-on:click.prevent="tab = 'account'" href="#"
                            class="border-transparent text-gray-500 hover:text-indigo-700 hover:border-indigo-300 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm">
                            <svg class="-ml-0.5 mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>My Account</span>
                        </a>
                        <a :class="{ 'text-indigo-600 border-indigo-500': tab === 'courses', 'text-gray-500 group-hover:text-gray-500' : tab != 'courses' }"
                            x-on:click.prevent="tab = 'courses'" href="#"
                            class="border-transparent hover:text-indigo-700 hover:border-indigo-300 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm">
                            @include('icons.courses', ['style' => '-ml-0.5 mr-2 h-5 w-5'])
                            <span>Courses</span>
                        </a>
                        <a class="border-transparent hover:text-indigo-700 hover:border-indigo-300 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm"
                            :class="{ 'text-indigo-600 border-indigo-500': tab === 'events' , 'text-gray-500 group-hover:text-gray-500' : tab != 'events' }"
                            x-on:click.prevent="tab = 'events'" href="#">
                            @include('icons.events', ['style' => '-ml-0.5 mr-2 h-5 w-5'])
                            <span>Events</span>
                        </a>

                        {{-- <a href="#"
                            class="border-indigo-500 text-indigo-600 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm"
                            aria-current="page">
                            <!-- Heroicon name: solid/users -->
                            <svg class="-ml-0.5 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            <span>Roles</span>
                        </a> --}}

                    </nav>
                </div>
                <div>
                    <div x-show="tab === 'account'">
                        @include('user.show.account')
                    </div>
                    <div x-show="tab === 'courses'">
                        @include('user.show.courses')
                    </div>
                    <div x-show="tab === 'events'">
                        @include('user.show.events')
                    </div>
                    {{-- <div x-show="tab === 'roles'">
                        @include('user.show.roles')
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>