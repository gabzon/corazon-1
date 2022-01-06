<div class="my-4">
    <div class="px-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse ($user->eventRegistrations as $event)
        <a href="{{ route('event.show', $event) }}" class="group rounded-lg mb-4 mx-3">
            <div>
                @if ($event->getMedia('events')->last() != null)
                {!! $event->getMedia('events')->last()->img('',['class'=>'overflow-hidden h-48 object-cover w-full
                rounded-lg group-hover:opacity-75', 'alt'=> $event->name ]) !!}
                @endif
                {{-- <img src="{{ $event->thumbnail }}" alt=""
                    class="overflow-hidden h-48 object-cover w-full rounded-lg group-hover:opacity-75"> --}}
            </div>
            <div class="p-3">
                <h2 class="font-semibold text-gray-700 group-hover:text-gray-900">{{ $event->name }}</h2>
                <p class="text-sm text-gray-500 group-hover:text-gray-900">
                    {{ $event->tagline }}
                </p>
                <p class="text-sm text-gray-500 mt-1 group-hover:text-gray-900">
                    {{ $event->start_date->format('M j, Y') }} @
                    {{ $event->start_date->format('H:i') }}
                </p>
                <p class="text-sm text-gray-500 group-hover:text-gray-900">
                    @isset($event->location)
                    <span>{{ $event->location->shortname ?? $event->location->name }}, {{ $event->city->name ?? ''
                        }}</span>
                    @else
                    To be defined
                    @endisset
                </p>
                <p class="text-sm text-gray-500 group-hover:text-gray-900">
                    {{ $event->type }}
                </p>
                {{--
                <x-shared.price-display :model="$event" /> --}}
            </div>
        </a>
        @empty
        <p class="py-5 text-center text-sm font-medium text-gray-900 truncate">
            No events found
        </p>
        @endforelse
    </div>
</div>