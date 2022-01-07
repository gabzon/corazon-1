<div>
    <section class="bg-white rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
        <ul role="list" class="divide-y divide-gray-200">
            @forelse ($list as $item)
            <li class="flex items-center p-4 space-x-3">
                <div class="flex-shrink-0">
                    <img src="{{ $item->coverImage }}" alt="{{ $item->name }}"
                        class="w-16 h-16 object-cover rounded-lg border">
                </div>
                <div class="min-w-0 flex-1">
                    <p class="font-medium text-gray-900 items-center">
                        <a href="{{ route(strtolower(class_basename($item)) . '.dashboard', $item) }}"
                            class="hover:text-indigo-700">
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
                    <p class="text-sm text-gray-500">
                        <span class="capitalize text-gray-700 font-medium">
                            {{ $item->type }}
                            @if ($item->level)
                            <x-shared.level-tip level="{{ $item->level_code }}" />
                            @endif
                        </span>
                        {{ implode(', ', $item->styles->pluck('name')->toArray()) }}
                    </p>
                </div>
                <div class="flex-shrink-0 flex items-center space-x-2">
                    <x-shared.register-like-bookmark-buttons :model="$item" size="xs" />
                    {{-- @if (auth()->user()->isRegistered($item))
                    <livewire:profile.user-registration-status-badge :model="$item" size="small" />
                    @endif
                    <livewire:shared.bookmark :model="$item" />
                    <livewire:shared.like :model="$item" /> --}}
                </div>
            </li>
            @empty

            <li class="flex items-center p-4 space-x-3">
                <p class="text-sm font-medium text-gray-900">
                    Nothing found!
                </p>
                <p class="text-sm text-gray-500">
                    Check out the
                    <a href="{{ route('courses.catalogue') }}" class="text-indigo-500 hover:text-indigo-800">
                        courses schedule
                    </a> page or
                    <a href="{{ route('events.catalogue') }}" class="text-indigo-500 hover:text-indigo-800">
                        events catalogue
                    </a> page.
                </p>
            </li>
            @endforelse
        </ul>
    </section>
</div>