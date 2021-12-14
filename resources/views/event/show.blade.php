<x-app-layout>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')
  
  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          sky: colors.sky,
          teal: colors.teal,
          cyan: colors.cyan,
          rose: colors.rose,
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/line-clamp'),
    ],
  }
  ```
-->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <main class="my-10 pb-8">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <h1 class="sr-only">Profile</h1>
                <!-- Main 3 column grid -->
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
                    <!-- Left column -->
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                        <!-- Welcome panel -->
                        <section aria-labelledby="profile-overview-title">
                            <div class="rounded-lg bg-white overflow-hidden shadow">
                                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                                <div class="bg-white p-6">
                                    <div class="sm:flex sm:items-center sm:justify-between">
                                        <div class="sm:flex sm:space-x-5">
                                            <div class="flex-shrink-0">
                                                <img class="mx-auto h-20 w-20 rounded-full"
                                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                            </div>
                                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                                <p class="text-sm font-medium text-gray-600">
                                                    {{ $event->start_date->format('d M Y') }} - {{
                                                    $event->end_date->format('d M Y') }}
                                                </p>
                                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">
                                                    {{ $event->name}}
                                                </p>
                                                <p class="text-sm font-medium text-gray-600 capitalize">
                                                    {{ $event->type }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-5 flex justify-center sm:mt-0">
                                            {{--
                                            <livewire:profile.user-registration-status-badge :model="$event"
                                                size="medium" /> --}}
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
                                    <div class="px-6 py-2 text-sm font-medium text-center">
                                        <span class="text-gray-600">
                                            {{--
                                            <livewire:shared.like :model="$event" withCount="true" /> --}}
                                        </span>
                                    </div>

                                    <div class="px-6 py-2 text-sm font-medium text-center">
                                        <span class="text-gray-600">
                                            {{--
                                            <livewire:shared.interest :model="$event" withCount="true" /> --}}
                                        </span>
                                    </div>

                                    <div class="px-6 py-5 text-sm font-medium text-center">
                                        {{-- <span class="text-gray-600">
                                            {{ trans_choice('{0} no registration|{1} :count registration|[2,*] :count
                                            registrations',
                                            count($event->registrations), ['count' =>
                                            count($event->registrations)]) }}
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section aria-labelledby="quick-links-title">


                            <div x-data="{tab:'info'}">
                                <div class="sm:hidden">
                                    <label for="tabs" class="sr-only">Select a tab</label>
                                    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                                    <select id="tabs" name="tabs"
                                        class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                        <option>Info</option>

                                        <option>Location</option>

                                        <option>Students</option>

                                        <option>Stats</option>
                                    </select>
                                </div>
                                <div class="hidden sm:block">
                                    <div class="border-b border-gray-200">
                                        <nav class="-mb-px flex" aria-label="Tabs">
                                            <a href="#" x-on:click="tab='info'"
                                                class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                                :class="{'border-indigo-500 text-indigo-600':tab == 'info', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300':tab!='info'}">
                                                Info
                                            </a>

                                            <a href="#" x-on:click="tab='location'"
                                                class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                                :class="{'border-indigo-500 text-indigo-600':tab == 'location', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300':tab!='location'}">
                                                Location
                                            </a>

                                            <a href="#" x-on:click="tab='registered'"
                                                :class="{'border-indigo-500 text-indigo-600':tab == 'registered', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300':tab!='registered'}"
                                                class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                                aria-current="page">
                                                Registered
                                            </a>

                                            <a href="#" x-on:click="tab='stats'"
                                                :class="{'border-indigo-500 text-indigo-600':tab == 'stats', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300':tab!='stats'}"
                                                class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                                Stats
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                                <div>
                                    <div x-show="tab === 'info'">
                                        @include('event.show.info')
                                    </div>
                                    <div x-show="tab === 'location'">
                                        @include('event.show.location')
                                    </div>
                                    <div x-show="tab === 'registered'">
                                        @include('event.show.registered')
                                    </div>
                                    <div x-show="tab === 'stats'">
                                        @include('event.show.stats')
                                    </div>
                                </div>
                            </div>




                        </section>
                    </div>

                    <!-- Right column -->
                    <div class="grid grid-cols-1 gap-4">
                        <!-- Announcements -->
                        <section aria-labelledby="announcements-title">
                            <div class="rounded-lg bg-white overflow-hidden shadow">
                                <div class="p-6">
                                    <h2 class="text-base font-medium text-gray-900" id="announcements-title">
                                        Announcements</h2>
                                    <div class="flow-root mt-6">
                                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                                            <li class="py-5">
                                                <div class="relative focus-within:ring-2 focus-within:ring-cyan-500">
                                                    <h3 class="text-sm font-semibold text-gray-800">
                                                        <a href="#" class="hover:underline focus:outline-none">
                                                            <!-- Extend touch target to entire panel -->
                                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                                            Office closed on July 2nd
                                                        </a>
                                                    </h3>
                                                    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                                                        Cum qui rem deleniti. Suscipit in dolor veritatis sequi aut.
                                                        Vero ut earum quis deleniti. Ut a sunt eum cum ut repudiandae
                                                        possimus. Nihil ex tempora neque cum consectetur dolores.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <a href="#"
                                            class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Recent Hires -->
                        <section aria-labelledby="recent-hires-title">
                            <div class="rounded-lg bg-white overflow-hidden shadow">
                                <div class="p-6">
                                    <h2 class="text-base font-medium text-gray-900" id="recent-hires-title">
                                        Instructors
                                    </h2>
                                    <div class="flow-root mt-6">
                                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                                            <li class="py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-8 w-8 rounded-full"
                                                            src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                            alt="">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate">
                                                            Leonard Krasner
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate">
                                                            @leonardkrasner
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-8 w-8 rounded-full"
                                                            src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                            alt="">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate">
                                                            Floyd Miles
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate">
                                                            @floydmiles
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-8 w-8 rounded-full"
                                                            src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                            alt="">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate">
                                                            Emily Selman
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate">
                                                            @emilyselman
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-8 w-8 rounded-full"
                                                            src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                            alt="">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate">
                                                            Kristin Watson
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate">
                                                            @kristinwatson
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <a href="#"
                                            class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="my-10">
        &nbsp;
    </div>


</x-app-layout>