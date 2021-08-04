<div class="px-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
    @forelse ($events as $event)
    <a href="{{ route('event.show', $event) }}" class="bg-white rounded-lg mb-4 mx-3 hover:shadow-md border">
        <img src="{{ $event->thumbnail }}" alt="" class="overflow-hidden rounded-t-lg">
        <div class="p-3">
            <h2 class="font-semibold text-lg text-gray-900">{{ $event->name }}</h2>
            <p class="text-sm text-gray-500">
                {{ $event->tagline }}
            </p>
            <p class="text-sm text-gray-500">
                <span class="font-medium">Date:</span> {{ $event->start_date->format('M j') }} -
                {{ $event->end_date->format('M j') }}
            </p>
            <p class="text-sm text-gray-500">
                <span class="font-medium">Time:</span> {{ $event->start_time->format('H:i') }} -
                {{ $event->end_time->format('H:i') }}
            </p>
            <p class="text-sm text-gray-500">
                <span class="font-medium">Price:</span>
                {{ $event->price }}
            </p>
            <p class="text-sm text-gray-500">
                {{-- <span class="font-medium">Location: </span> {{ $event->location->name }} --}}
            </p>
            <p class="text-sm text-gray-500">
                <span class="font-medium">City: </span> {{ $event->city->name }}
            </p>

            <p class="text-sm text-gray-500">
                <span class="font-medium">Type: </span> {{ $event->type }}
            </p>
            <p class="text-sm text-gray-500">
                <span class="font-medium">status: </span> {{ $event->status }}
            </p>
            <div>
            </div>
        </div>
    </a>
    @empty
    <p class="py-5 text-center text-sm font-medium text-gray-900 truncate">
        No events found
    </p>
    @endforelse
</div>