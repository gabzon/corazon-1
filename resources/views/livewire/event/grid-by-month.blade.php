<div>

    @foreach ($collection as $month => $events)
    <hr>
    <div class="month-section mb-10">
        <h3 class="text-lg font-semibold text-gray-900 my-3">{{ $month }} </h3>
        <ul class="grid grid-cols-5 gap-6">
            @foreach ($events as $event)
            <li class="col-span-5 sm:col-span-4 md:col-span-3 lg:col-span-2 xl:col-span-1">
                <article class="group rounded-lg mb-4 max-w-xs">
                    <a href="{{ route('event.show', $event) }}">
                        <div>
                            <img src="{{ $event->coverImage }}" alt="{{ $event->name }}"
                                class="overflow-hidden object-cover w-full rounded-lg group-hover:opacity-75">
                        </div>
                        <div class="p-1">
                            <h2 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                                {{ $event->name }}
                            </h2>
                            <p class="text-xs text-gray-500 mt-1 group-hover:text-gray-900">
                                {{ $event->start_date->format('M j') }} @ {{ $event->start_date->format('H:i') }}
                            </p>
                            <p class="text-xs text-gray-500 group-hover:text-gray-900">
                                {{ $event->city->name }}
                                @isset($event->location)
                                <span>• {{ $event->location->shortname ?? $event->location->name }}</span>
                                @endisset
                            </p>
                            <p class="text-xs text-gray-500 group-hover:text-gray-900 capitalize ">
                                {{ $event->type }}
                                {{ implode(', ',$event->styles()->pluck('name')->toArray()) }}
                            </p>
                        </div>
                    </a>
                </article>
            </li>
            @endforeach
        </ul>
    </div>
    @endforeach
</div>