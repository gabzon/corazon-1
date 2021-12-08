<div>
    <section class="bg-white py-4 rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
        <ul role="list" class="px-4 divide-y divide-gray-200">
            @foreach ($list as $like)
            <li class="flex items-center py-4 space-x-3">
                <div class="flex-shrink-0">
                    <x-shared.display-media-library-image :model="$like->likeable" alt="{{ $like->likeable->name }}"
                        collection="{{ $like->type == 'Event' ? 'events' : 'courses' }}" />
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900">
                        <a href="{{ route($like->type == 'Event' ? 'event.show': 'course.show', $like->likeable)  }}"
                            class="hover:text-indigo-700">
                            {{ $like->likeable->name }}
                            @if ($like->likeable->location)
                            @ {{ $like->likeable->location->name }}
                            @endif
                        </a>
                        <x-shared.status-badge status="{{ $like->likeable->status }}" />
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $like->likeable->start_date->format('d M Y') }} - {{ $like->likeable->end_date->format('d M
                        Y') }}
                        @ {{ $like->likeable->start_date->format('H:i') }}
                    </p>
                </div>
                <div class="flex-shrink-0">
                    {{-- <button type="button"
                        class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                        <span>
                            Follow
                        </span>
                    </button> --}}
                    <livewire:shared.like :model="$like->likeable" />
                </div>
            </li>
            @endforeach
        </ul>
    </section>
    <div class="p-4">
        {{ $list->links() }}
    </div>
</div>