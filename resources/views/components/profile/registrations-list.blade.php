<div>
    <section class="bg-white py-4 rounded-lg overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
        <ul role="list" class="px-4 divide-y divide-gray-200">
            @foreach ($list as $registration)
            <li class="flex items-center py-4 space-x-3">
                <div class="flex-shrink-0">
                    <x-shared.display-media-library-image :model="$registration->registrable"
                        alt="{{ $registration->registrable->name }}"
                        collection="{{ $registration->type == 'Event' ? 'events' : 'courses' }}" />
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900">
                        <a href="{{ route($registration->type == 'Event' ? 'event.show': 'course.show', $registration->registrable) }}"
                            class="hover:text-indigo-700">
                            {{ $registration->registrable->name }}
                            @if ($registration->registrable->location)
                            @ {{ $registration->registrable->location->name }}
                            @endif
                        </a>
                        <x-shared.status-badge status="{{ $registration->registrable->status }}" />
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $registration->registrable->start_date->format('d M Y') }} - {{
                        $registration->registrable->end_date->format('d M
                        Y') }}
                        @ {{ $registration->registrable->start_date->format('H:i') }}
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
    <div class="p-4">
        {{ $list->links() }}
    </div>
</div>

Men da lias
you are stupid sailadnem