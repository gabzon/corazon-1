<article class="group rounded-lg mb-4 mx-3 max-w-xs">
    <a href="{{ route('event.show', $event) }}">
        <div>
            @if ($event->getMedia('events')->last() != null)
            {!! $event->getMedia('events')->last()->img('',['class'=>'overflow-hidden h-48 object-cover w-full
            rounded-lg group-hover:opacity-75', 'alt'=> $event->name ]) !!}
            @else
            <img src="{{ $event->coverImage }}" alt="{{ $event->name }}"
                class="overflow-hidden h-48 object-cover w-full rounded-lg group-hover:opacity-75">
            @endif

        </div>
        <div class="p-3">
            <h2 class="font-semibold text-gray-700 group-hover:text-gray-900">
                {{ $event->name }}
            </h2>
            <p class="text-sm text-gray-500 group-hover:text-gray-900">
                {{ $event->tagline }}
            </p>
            <p class="text-sm text-gray-500 mt-1 group-hover:text-gray-900">
                {{ $event->start_date->format('M j, Y') }} @
                {{ $event->start_date->format('H:i') }}
            </p>
            <p class="text-sm text-gray-500 group-hover:text-gray-900">
                @isset($event->location)
                <span>{{ $event->location->shortname ?? $event->location->name }}, {{ $event->city->name ?? '' }}</span>
                @else
                {{ $event->city->name ?? '' }}
                @endisset
            </p>
            <p class="text-sm text-gray-500 group-hover:text-gray-900 capitalize ">
                {{ $event->type }}
                {{ implode(', ',$event->styles()->pluck('name')->toArray()) }}
            </p>
            <div class="mt-1 flex justify-between items-center">
                <div>
                    @if ($event->canRegister())
                    <livewire:shared.registration-button :model="$event" size="xs" />
                    @endif
                </div>
                <div class="inline-flex">
                    <livewire:shared.bookmark :model="$event" />
                    <livewire:shared.favorite-button :model="$event" />
                </div>

            </div>
        </div>
    </a>
</article>