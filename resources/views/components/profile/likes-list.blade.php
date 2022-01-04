<div>
    <section class="bg-white rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
        <ul role="list" class="divide-y divide-gray-200">
            @foreach ($list as $like)
            <li class="flex items-center p-4 space-x-3">
                <div class="flex-shrink-0">
                    <x-shared.display-media-library-image :model="$like" alt="{{ $like->name }}"
                        collection="{{ $like->type == 'Event' ? 'events' : 'courses' }}" />
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:text-indigo-700">
                            {{ $like->name }}
                            @if ($like->location)
                            @ {{ $like->location->name }}
                            @endif
                        </a>
                        <span class="ml-2">
                            <x-shared.status-dot status="{{ $like->status }}" />
                        </span>
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $like->start_date->format('d M Y') }} - {{ $like->end_date->format('d M
                        Y') }}
                        @ {{ $like->start_date->format('H:i') }}
                    </p>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    @if ($user->isRegistered($like))
                    <livewire:profile.user-registration-status-badge :model="$like" size="small" />
                    @endif
                    <livewire:shared.like :model="$like" />
                </div>
            </li>
            @endforeach
        </ul>
    </section>
</div>