<div>
    <section class="bg-white rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
        <ul role="list" class="divide-y divide-gray-200">
            @foreach ($list as $registration)
            <li class="flex items-center py-4 space-x-3 px-4">
                <div class="flex-shrink-0">
                    <x-shared.display-media-library-image :model="$registration" alt="{{ $registration->name }}"
                        collection="{{ $registration->type == 'Event' ? 'events' : 'courses' }}" />
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900">
                        <a href="{{ route(strtolower(class_basename($registration)) . '.dashboard', $registration) }}"
                            class="hover:text-indigo-700">
                            {{ $registration->name }}
                            @if ($registration->location)
                            @ {{ $registration->location->name }}
                            @endif
                        </a>
                        <x-shared.status-badge status="{{ $registration->status }}" />
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $registration->start_date->format('d M Y') }} - {{
                        $registration->end_date->format('d M
                        Y') }}
                        @ {{ $registration->start_date->format('H:i') }}
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $registration->type }}
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <button type="button"
                        class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                        <span>
                            Follow
                        </span>
                    </button>


                </div>
            </li>
            @endforeach
        </ul>
    </section>
</div>