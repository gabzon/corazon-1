<section>
    <h2 class="flex-1 text-lg font-bold text-gray-900">Events</h2>
    <div>
        <div class="flow-root mt-6">
            <ul role="list" class="-my-5 divide-y divide-gray-200 border rounded-lg mb-3">
                @forelse ($events as $event)
                <li class="py-2 bg-white hover:bg-gray-100">
                    <a class="flex items-center space-x-4 px-4" href="{{ route('event.show', $event) }}">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-xl object-cover" src="{{ $event->coverImage }}" alt="">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ $event->name }}</p>
                            <p class="text-sm text-gray-500 truncate">{{ $event->start_date->format('D d F Y') }}</p>
                        </div>
                        <div>
                            @include('icons.chevron-right',['style'=>'h-5 w-5 text-gray-400'])
                        </div>
                    </a>
                </li>
                @empty
                <li class="py-4">
                    <p class="text-sm font-medium text-gray-500 truncate px-4">No events found!</p>
                </li>
                @endforelse
            </ul>
            <div class="my-4 mx-3">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</section>