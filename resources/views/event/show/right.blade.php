<h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $event->name }}</h1>
@if ($event->tagline)
<h2 class="text-gray-600 text-xl">{{ $event->tagline }}</h2>
@endif

<div class="mt-3">
    <h2 class="sr-only">Product information</h2>
    <x-shared.price-display class="text-3xl text-gray-900" :model="$event" />
</div>


<div class="mt-6">
    <h3 class="sr-only">Description</h3>

    <div>
        <h3 class="font-medium text-gray-900 pb-1">Information</h3>
        <div class="w-full sm:w-2/3 md:w-1/2">
            <table class="text-sm font-medium">
                <tr>
                    <td class="text-gray-500 py-2">Date</td>
                    <td class="text-gray-900">
                        {{ $event->start_date->format('M j Y') }} - {{ $event->end_date->format('M j Y') }}
                    </td>
                </tr>
                <tr>
                    <td class="text-gray-500 py-2">Time</td>
                    <td class="text-gray-900">
                        {{ $event->start_date->format('H:i') }} - {{ $event->end_date->format('H:i') }}
                    </td>
                </tr>
                @if ($event->location)
                <tr>
                    <td class="text-gray-500 capitalize pr-5 py-2">Place</td>
                    <td class="text-gray-900">
                        <a href="#location" class="text-indigo-500 hover:text-indigo-700">
                            {{ $event->location->name }}, {{ $event->location->city->name }}
                        </a>
                    </td>
                </tr>
                @endif
                <tr>
                    <td class="text-gray-500 capitalize pr-5 py-2">{{ $event->type }}</td>
                    <td class="text-gray-900">
                        @foreach ($event->styles as $item)
                        <span class="block">{{ $item->name }}</span>
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


{{-- <div class="mt-9 pb-3 flex sm:flex-col1">
    <button type="submit"
        class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">
        Register
    </button>

    <button type="button"
        class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500">
        <!-- Heroicon name: outline/heart -->
        <svg class="h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
        <span class="sr-only">Add to favorites</span>
    </button>
</div> --}}

<form class="mt-3">
    <div>
        <x-partials.social-links :model="$event" />
    </div>

</form>

<section aria-labelledby="details-heading" class="mt-12">
    <h2 id="details-heading" class="sr-only">Additional details</h2>

    <div class="border-t divide-y divide-gray-200">

        @if ($event->prices->count() > 0 )
        <div x-data="{ open : false }">
            <button type="button"
                class="group relative w-full py-6 flex justify-between items-center text-left focus:outline-none"
                @click="open = !open">

                <span :class="{ 'text-indigo-600': open, 'text-gray-900' : !open}"
                    class="text-gray-900 text-sm font-medium">
                    Pricing
                </span>

                <div class="ml-6 flex items-center">
                    <span class="text-2xl text-indigo-600" x-show="open">&minus;</span>
                    <span class="text-2xl text-gray-600" x-show="!open">&plus;</span>
                </div>

            </button>
            <div x-show="open">
                <x-shared.pricing-list :model="$event" :title="false" />
            </div>
        </div>
        @endif

        <div x-data="{ open : false }">
            <button type="button"
                class="group relative w-full py-6 flex justify-between items-center text-left focus:outline-none"
                @click="open = !open">

                <span :class="{ 'text-indigo-600': open, 'text-gray-900' : !open}"
                    class="text-gray-900 text-sm font-medium">
                    Description
                </span>

                <div class="ml-6 flex items-center">
                    <span class="text-2xl text-indigo-600" x-show="open">&minus;</span>
                    <span class="text-2xl text-gray-600" x-show="!open">&plus;</span>
                </div>

            </button>
            <div x-show="open">
                <div class="pb-6 prose prose-sm">
                    <div class="mb-5">{!! $event->description !!}</div>
                </div>
            </div>
        </div>

        @if ($event->contact || $event->email || $event->phone )
        <div x-data="{ open : false }">
            <button type="button"
                class="group relative w-full py-6 flex justify-between items-center text-left focus:outline-none"
                @click="open = !open">

                <span :class="{ 'text-indigo-600': open, 'text-gray-900' : !open}"
                    class="text-gray-900 text-sm font-medium">
                    Contact information
                </span>

                <div class="ml-6 flex items-center">
                    <span class="text-2xl text-indigo-600" x-show="open">&minus;</span>
                    <span class="text-2xl text-gray-600" x-show="!open">&plus;</span>
                </div>

            </button>

            <div x-show="open">
                <div class="pb-6 prose prose-sm">
                    <ul role="list">
                        @if ($event->contact)
                        <li>{{ $event->contact }}</li>
                        @endif

                        @if ($event->email)
                        <li>{{ $event->email }}</li>
                        @endif

                        @if ($event->phone)
                        <li>{{ $event->phone }}</li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        @endif


        <div id="location" x-data="{ open : true }">
            <button type="button"
                class="group relative w-full py-6 flex justify-between items-center text-left focus:outline-none"
                @click="open = !open">

                <span :class="{ 'text-indigo-600': open, 'text-gray-900' : !open}"
                    class="text-gray-900 text-sm font-medium">
                    Location
                </span>

                <div class="ml-6 flex items-center">
                    <span class="text-2xl text-indigo-600" x-show="open">&minus;</span>
                    <span class="text-2xl text-gray-600" x-show="!open">&plus;</span>
                </div>

            </button>
            <div x-show="open">
                @if ($event->location)
                <x-location.details :location="$event->location" />
                @endif
            </div>
        </div>

    </div>



</section>