<div class="flex h-full flex-col">
    @if ($events->count() > 0)
    <header class="relative z-40 flex flex-none items-center justify-between py-4">
        <h1 class="text-lg font-semibold text-gray-900">
            <time datetime="2022-01">This week: {{ $week->startOfWeek()->format('M jS') }} - {{
                $week->endOfWeek()->format('M jS')
                }}</time>
        </h1>
        <div class="flex items-center">
            <div class="hidden md:ml-4 md:flex md:items-center">
                {{-- <button type="button"
                    class="ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                    event</button> --}}
            </div>
        </div>
    </header>

    <div class="bg-white grid grid-cols-7 divide-x divide-x shadow border-t rounded-lg">
        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Monday</h3>
            @foreach ($mondays as $mon)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $mon) }}">
                    <div>
                        <img src="{{ $mon->coverImage }}" alt="{{ $mon->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $mon->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $mon->start_date->format('M j') }} @ {{ $mon->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($mon->location)
                            <span>{{ $mon->location->shortname ?? $mon->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $mon->type }}
                            {{ implode(', ',$mon->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Tuesday</h3>
            @foreach ($tuesdays as $item)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $item) }}">
                    <div>
                        <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $item->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($item->location)
                            <span>{{ $item->location->shortname ?? $item->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $item->type }}
                            {{ implode(', ',$item->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Wednesday</h3>
            @foreach ($wednesdays as $item)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $item) }}">
                    <div>
                        <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $item->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($item->location)
                            <span>{{ $item->location->shortname ?? $item->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $item->type }}
                            {{ implode(', ',$item->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Thursday</h3>
            @foreach ($thursdays as $item)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $item) }}">
                    <div>
                        <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $item->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($item->location)
                            <span>{{ $item->location->shortname ?? $item->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $item->type }}
                            {{ implode(', ',$item->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Friday</h3>
            @foreach ($fridays as $item)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $item) }}">
                    <div>
                        <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $item->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($item->location)
                            <span>{{ $item->location->shortname ?? $item->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $item->type }}
                            {{ implode(', ',$item->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>


        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Saturday</h3>
            @foreach ($saturdays as $item)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $item) }}">
                    <div>
                        <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $item->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($item->location)
                            <span>{{ $item->location->shortname ?? $item->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $item->type }}
                            {{ implode(', ',$item->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>


        <div class="col-span-7 sm:col-span-5 md:col-span-3 lg:col-span-1 p-2">
            <h3 class="font-semibold text-gray-700 mb-3 text-center">Sunday</h3>
            @foreach ($sundays as $item)
            <article class="group rounded-lg mb-4 max-w-xs">
                <a href="{{ route('event.show', $item) }}">
                    <div>
                        <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                            class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                    </div>
                    <div class="p-1">
                        <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                            {{ $item->name }}
                        </h2>
                        <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900">
                            @isset($item->location)
                            <span>{{ $item->location->shortname ?? $item->location->name }}</span>
                            @endisset
                        </p>
                        <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                            {{ $item->type }}
                            {{ implode(', ',$item->styles()->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </a>
            </article>
            @endforeach
        </div>


    </div>
    @endif


</div>