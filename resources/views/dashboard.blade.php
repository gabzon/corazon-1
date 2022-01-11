<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
    <div class="h-screen overflow-y-scroll">

        <div class="rounded-md bg-yellow-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/exclamation -->
                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">
                        Attention development mode
                    </h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p>
                            This application is still under development, expect to find some bugs. if you find any
                            bug or you have any comment please take a picture and send it to me.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <main class="mt-10 pb-8">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <h1 class="sr-only">Profile</h1>
                <!-- Main 3 column grid -->
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
                    <!-- Left column -->
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                        <section aria-labelledby="profile-overview-title">
                            <div class="rounded-lg bg-white overflow-hidden shadow">
                                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                                <div class="bg-white p-6">
                                    <div class="sm:flex sm:items-center sm:justify-between">
                                        <div class="sm:flex sm:space-x-5">
                                            <div class="flex-shrink-0">
                                                <img class="mx-auto h-20 w-20 rounded-full object-cover"
                                                    src="{{ auth()->user()->photo }}" alt="">
                                            </div>
                                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                                <p class="text-sm font-medium text-gray-600">Welcome back,</p>
                                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">
                                                    {{ auth()->user()->name }}
                                                </p>
                                                <p class="text-sm font-medium text-gray-600">
                                                    {{ auth()->user()->profession ?? auth()->user()->email }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-5 flex justify-center sm:mt-0">
                                            <a href="{{ route('user.show', auth()->user()) }}"
                                                class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                View profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
                                    <div class="px-6 py-5 text-sm font-medium text-center">
                                        <a href="{{ route('profile.bookmarks') }}"
                                            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                                            <span class="mr-2">
                                                @include('icons.bookmark-star')
                                            </span>
                                            {{ auth()->user()->bookmarksCount() }}
                                        </a>
                                    </div>

                                    <div class="px-6 py-5 text-sm font-medium text-center">
                                        <a href="{{ route('profile.favorites') }}"
                                            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                                            <span class="mr-2">
                                                @include('icons.heart')
                                            </span>
                                            {{ auth()->user()->favoritesCount() }}
                                        </a>
                                    </div>

                                    <div class="px-6 py-5 text-sm font-medium text-center">
                                        <a href="{{ route('profile.registrations') }}"
                                            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                                            <span class="mr-2">
                                                @include('icons.edit')
                                            </span>
                                            {{ auth()->user()->registrationsCount() }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <x-profile.week-registrations />

                        {{--
                        <x-profile.month-registrations /> --}}

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
                                                            Nothing for the moment
                                                        </a>
                                                    </h3>
                                                    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                                                        No announcements found!
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
                    </div>
                </div>
            </div>
        </main>
        <div class="my-20">
            &nbsp;
        </div>
    </div>

</x-app-layout>