<section class="mt-4 bg-white rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
    <ul role="list" class="divide-y divide-gray-200">
        @forelse ($bookmarkable as $item)
        <li class="flex items-center py-4 space-x-3">
            <div class="flex-shrink-0">
                <x-shared.display-media-library-image :model="$item" alt="{{ $item->name }}"
                    collection="{{ $item->type == 'Event' ? 'events' : 'courses' }}" />
            </div>
            <div class="min-w-0 flex-1 px-2">
                <p class="text-sm font-medium text-gray-900">
                    <a class="hover:text-indigo-700"
                        href="{{ route(strtolower(class_basename($item)) . '.show', $item) }}">
                        {{ $item->name }}
                        @if ($item->location)
                        @ {{ $item->location->name }}
                        @endif
                    </a>
                    <span class="ml-2">
                        <x-shared.status-dot status="{{ $item->status }}" />
                    </span>
                </p>
                <p class="text-sm text-gray-500">
                    {{ $item->start_date->format('d M Y') }} -
                    {{ $item->end_date->format('d M Y') }}
                    @if (class_basename($item) == 'Event')
                    @ {{ $item->start_date->format('H:i') }}
                    @endif
                </p>
            </div>
            <div class="flex items-center px-4 space-x-1">

                @if (auth()->user()->isRegistered($item))
                <div>
                    <livewire:profile.user-registration-status-badge :model="$item" size="small" />
                </div>
                @endif

                <livewire:shared.bookmark :model="$item" />

                <livewire:shared.like :model="$item" />
            </div>
        </li>
        @empty
        <li class="flex items-center p-4 text-sm font-medium text-gray-500">
            No bookmarked events found. Check out the &nbsp;
            <a href="{{ route('events.catalogue') }}" class="text-indigo-500 hover:text-indigo-800">events catalogue</a>
        </li>
        @endforelse
    </ul>
</section>