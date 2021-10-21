<x-guest-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-700 sm:text-3xl sm:truncate">
                    {{ $event->name }}
                </h2>
            </div>
            @auth
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('event.edit', $event) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
            </div>
            @endauth
        </div>
    </x-slot>

    <div class="w-full flex flex-wrap">
        <div class="bg-gray-50 w-full md:w-3/4 order-last md:order-first">
            @if ($event->video)
            <div class="grid grid-cols-1 sm:grid-cols-5 gap-6 m-3">
                <div class="col-span-5 sm:col-span-2 space-y-6">
                    <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                        {!! $event->video !!}
                    </div>
                </div>
                <div class="col-span-5 sm:col-span-3 space-y-6">
                    <div class="prose leading-5">
                        @if ($event->tagline)
                        <h3>{{ $event->tagline }}</h3>
                        @endif
                        <div class="mb-5">{!! $event->description !!}</div>
                    </div>
                    <x-shared.pricing-list :model="$event" />
                    <br>
                    <div class="mr-3 sm:mr-0">
                        @if ($event->location)
                        <h3 class="flex-1 text-lg font-bold text-gray-900">Location</h3>
                        <x-location.details :location="$event->location" />
                        @endif
                        <br>
                    </div>
                </div>
            </div>
            @else
            <div class="max-w-5xl mx-auto my-5 px-3 md:px-3 lg:px-2">
                <div class="prose leading-5">
                    @if ($event->tagline)
                    <h3>{{ $event->tagline }}</h3>
                    @endif
                    <div>{!! $event->description !!}</div>
                </div>
                <x-shared.pricing-list :model="$event" />
                <br>
                @if ($event->location)
                <div class="mr-3 sm:mr-0">
                    <h3 class="flex-1 text-lg font-bold text-gray-900">Location</h3>
                    <x-location.details :location="$event->location" />
                    <br>
                </div>
                @endif
            </div>
            @endif
        </div>
        <div class="w-full md:w-1/4">
            @include('event.show.sidebar')
        </div>
    </div>

</x-guest-layout>