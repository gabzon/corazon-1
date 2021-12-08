<h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $event->name }}</h1>
@if ($event->tagline)
<h2 class="text-gray-600 text-xl">{{ $event->tagline }}</h2>
@endif

<div class="mt-3 grid grid-cols-2 items-center">
    @if ($event->prices()->count() > 0 )
    <div class="col-span-2 sm:col-span-1">
        <h2 class="sr-only">Product information</h2>
        <x-shared.price-display class="text-3xl text-gray-900" :model="$event" />
    </div>
    @endif
    <div class="col-span-2 sm:col-span-1">
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
    </div>
</div>


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
                        {{ implode(', ', $event->styles->pluck('name')->toArray()) }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


<div class="mt-9 pb-3 flex sm:flex-col1">
    @guest
    <div class="inline-flex items-center">
        <a href="http://"
            class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">
            Login
        </a>
        <a href="" class="ml-2 text-sm font-medium text-gray-500 hover:text-indigo-700">
            or create an account here <span aria-hidden="true">&rarr;</span>
        </a>
    </div>
    @endguest
    @auth
    <livewire:shared.registration-button :model="$event" />
    <livewire:shared.like :model="$event" />
    <livewire:shared.interest :model="$event" />
    @endauth
</div>

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