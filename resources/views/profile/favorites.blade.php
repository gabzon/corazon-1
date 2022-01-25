<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('My Favorites') }}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('profile.pages.nav')
            </div>
            <main class="lg:col-span-9 xl:col-span-9">
                <div class="px-3 sm:px-0 py-4 sm:py-6 md:py-8 lg:py-10">
                    <div x-data="{menu: false}" class="sm:hidden w-full mb-3">
                        <button @click="menu = !menu" @click.away="menu = false"
                            class="bg-white relative w-full border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <span class="block truncate">
                                Options
                            </span>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/selector -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="menu" x-cloak>
                            <div class="mt-2">
                                @include('profile.pages.nav')
                            </div>
                        </div>
                    </div>
                    @switch($type)
                    @case('registrable')
                    <x-profile.registrations-list :list="$favorites" :user="auth()->user()" />
                    <div class="my-3 text-sm text-gray-500 px-4">
                        Please note you need to be fully registered in order to favorite any course or event!
                    </div>
                    @break
                    @case('organization')
                    <ul class="bg-white divide-y divide-blue-200 rounded-lg">
                        @forelse ($favorites as $item)
                        <li class="px-4 py-2">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div>
                                        <img src="{{ $item->photo }}" alt=""
                                            class="w-16 h-16 object-cover rounded-lg border">
                                    </div>
                                    <div class="ml-3">
                                        <h4>{{ $item->name }}</h4>
                                        <p>{{ 'hola'}}</p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>

                        </li>
                        @empty
                        <li></li>
                        @endforelse
                    </ul>
                    @break
                    @case('lesson')
                    <ul class="bg-white divide-y divide-blue-200 rounded-lg">
                        @forelse ($favorites as $item)
                        <li class="px-4 py-2">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div>
                                        <img src="{{ $item->course->coverImage }}" alt=""
                                            class="w-16 h-16 object-cover rounded-lg border">
                                    </div>
                                    <div class="ml-3">
                                        <h4>{{ $item->title }}</h4>
                                        <p>{{ $item->course->name }}</p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>

                        </li>
                        @empty
                        <li>
                            Nothing found
                        </li>
                        @endforelse
                    </ul>
                    @break
                    @default
                    Nothing found
                    @endswitch
                    <div class="my-20">&nbsp;</div>
                </div>
            </main>
        </div>
    </div>

</x-app-layout>