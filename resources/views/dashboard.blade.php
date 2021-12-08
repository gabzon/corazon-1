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
                                        <a href="{{ route('profile.interests') }}"
                                            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                                            <span class="mr-2">
                                                @include('icons.star')
                                            </span>
                                            {{ trans_choice('{0} no interest|{1} :count interest|[2,*] :count
                                            interests',
                                            count(auth()->user()->interests), ['count' =>
                                            count(auth()->user()->interests)]) }}
                                        </a>
                                    </div>

                                    <div class="px-6 py-5 text-sm font-medium text-center">
                                        <a href="{{ route('profile.likes') }}"
                                            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                                            <span class="mr-2">
                                                @include('icons.heart-fill')
                                            </span>
                                            {{ trans_choice('{0} no like|{1} :count like|[2,*] :count likes',
                                            count(auth()->user()->likes), ['count' =>
                                            count(auth()->user()->likes)]) }}
                                        </a>
                                    </div>

                                    <div class="px-6 py-5 text-sm font-medium text-center">
                                        <a href="{{ route('profile.registrations') }}"
                                            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                                            <span class="mr-2">
                                                @include('icons.edit')
                                            </span>
                                            {{ trans_choice('{0} no registration|{1} :count registration|[2,*] :count
                                            registrations',
                                            count(auth()->user()->registrations), ['count' =>
                                            count(auth()->user()->registrations)]) }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <x-profile.week-registrations />

                        <x-profile.month-registrations />

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
                    </div>
                </div>
            </div>
        </main>
        <div class="my-20">
            &nbsp;
        </div>
    </div>

</x-app-layout>