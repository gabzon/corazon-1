<x-guest-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h1 class="text-2xl font-bold leading-7 text-gray-700 sm:text-3xl sm:truncate">
                    {{ $location->name }}
                </h1>
            </div>
            @auth
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('location.edit', $location) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
            </div>
            @endauth
        </div>
    </x-slot>


    <div class="w-full flex flex-wrap">
        <div class="bg-gray-50 w-full md:w-3/4 order-last md:order-first">
            <div class="max-w-7xl mx-auto my-5 px-3 md:px-3 lg:px-2">

                <h2 class="flex-1 text-lg font-bold text-gray-900">Address</h2>

                <x-location.map :location="$location" :photos="$photos" />

                <div class="my-8">
                    <header>
                        <h2 class="flex-1 text-lg font-bold text-gray-900">Spaces</h2>
                    </header>

                    <div class="my-3">
                        @include('location._classrooms')
                    </div>
                </div>
            </div>
        </div>
        <aside class="w-full md:w-1/4">
            @include('location.show.sidebar')
        </aside>
    </div>

</x-guest-layout>