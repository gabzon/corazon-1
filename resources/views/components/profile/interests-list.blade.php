<div>
    <section class="bg-white py-4 rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
        <ul role="list" class="px-4 divide-y divide-gray-200">
            @foreach ($list as $interest)
            <li class="flex items-center py-4 space-x-3">
                <div class="flex-shrink-0">
                    <x-shared.display-media-library-image :model="$interest->interestable"
                        alt="{{ $interest->interestable->name }}"
                        collection="{{ $interest->type == 'Event' ? 'events' : 'courses' }}" />
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900">
                        <a class="hover:text-indigo-700"
                            href="{{ route($interest->type == 'Event' ? 'event.show': 'course.show', $interest->interestable)  }}">
                            {{ $interest->interestable->name }}
                            @if ($interest->interestable->location)
                            @ {{ $interest->interestable->location->name }}
                            @endif
                        </a>
                        <x-shared.status-badge status="{{ $interest->interestable->status }}" />
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $interest->interestable->start_date->format('d M Y') }} - {{
                        $interest->interestable->end_date->format('d M
                        Y') }}
                        @ {{ $interest->interestable->start_date->format('H:i') }}
                    </p>
                </div>
                <div class="flex-shrink-0">
                    {{-- <button type="button"
                        class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                        <span>
                            Follow
                        </span>
                    </button> --}}
                    <livewire:shared.interest :model="$interest->interestable" />
                </div>
            </li>
            @endforeach
        </ul>
    </section>
    <div class="p-4">
        {{-- {{ $list->links() }} --}}
    </div>
</div>