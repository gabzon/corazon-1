<h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $event->name }}</h1>
@if ($event->tagline)
<h2 class="text-gray-600 text-xl">{{ $event->tagline }}</h2>
@endif

{{-- <div class="mt-3 grid grid-cols-2 items-center"> --}}
    {{-- @if ($event->prices()->count() > 0 )
    <div class="col-span-2 sm:col-span-1">
        <h2 class="sr-only">Product information</h2>

        <x-shared.price-display class="text-3xl text-gray-900" :model="$event" />
    </div>
    @endif --}}
    {{-- <div class="col-span-2 sm:col-span-1">
        @if ($event->status == 'active')
        <span
            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
            {{ $event->start_date->diffForHumans() }}
        </span>
        @endif
        @if ($event->status == 'canceled')
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
            canceled
        </span>
        @endif
    </div> --}}
    {{--
</div> --}}


<div class="mt-2">
    <h3 class="sr-only">Description</h3>

    <div>
        {{-- <h3 class="font-medium text-gray-900 pb-1">Information</h3> --}}

        <div class="w-full">
            <table class="text-sm font-medium">
                <tr>
                    <td class="text-gray-500 py-2">Date</td>
                    <td class="text-gray-900">
                        {{ $event->start_date->format('M j Y') }} - {{ $event->end_date->format('M j Y') }}
                        <div class="inline sm:ml-2">
                            @if ($event->status == 'active')
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                {{ $event->start_date->diffForHumans() }}
                            </span>
                            @endif
                            @if ($event->status == 'canceled')
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                canceled
                            </span>
                            @endif
                        </div>
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
                    <td class="text-gray-500 capitalize pr-5 py-2">Venue</td>
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
                        {{ implode(', ', $event->styles->pluck('name')->toArray()) }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<x-shared.register-like-bookmark-buttons :model="$event" />

<form class=" mt-3">
    <div>
        <x-partials.social-links :model="$event" />
    </div>

</form>

<section aria-labelledby="details-heading" class="mt-12">
    <h2 id="details-heading" class="sr-only">Additional details</h2>

    <div class="border-t divide-y divide-gray-200">

        {{-- @if ($event->prices->count() > 0 )
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
        @endif --}}

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

        @if ($event->contact || $event->email || $event->phone || $event->organizations()->count() > 0)
        <div x-data="{ open : false }">
            <button type="button"
                class="group relative w-full py-6 flex justify-between items-center text-left focus:outline-none"
                @click="open = !open">

                <span :class="{ 'text-indigo-600': open, 'text-gray-900' : !open}"
                    class="text-gray-900 text-sm font-medium">
                    Organisers
                </span>

                <div class="ml-6 flex items-center">
                    <span class="text-2xl text-indigo-600" x-show="open">&minus;</span>
                    <span class="text-2xl text-gray-600" x-show="!open">&plus;</span>
                </div>

            </button>

            <div x-show="open">
                @foreach ($event->organizations as $org)
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="py-4 flex justify-between items-center">
                        <a href="{{ route('organization.show', $org) }}" class="flex">
                            <img class="h-10 w-10 rounded-full" src="{{ $org->photo }}" alt="">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">{{ $org->shortname ?? $org->name }}</p>
                                <p class="text-sm text-gray-500">{{ $org->email }}</p>
                            </div>
                        </a>
                        <div>
                            <x-partials.social-links :model="$org" />
                        </div>
                    </li>
                </ul>
                @endforeach
                <div class="text-gray-600 text-sm mt-3 mb-8">
                    <ul role="list-none">
                        @if ($event->contact)
                        <li><span class="text-gray-900 font-medium">Contact</span> {{ $event->contact }}</li>
                        @endif

                        @if ($event->email)
                        <li><span class="text-gray-900 font-medium">Email</span> {{ $event->email }}</li>
                        @endif

                        @if ($event->phone)
                        <li><span class="text-gray-900 font-medium">Phone</span> {{ $event->phone }}</li>
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
                    Venue
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