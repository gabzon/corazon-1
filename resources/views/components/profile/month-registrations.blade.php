<div>
    <h3 class="text-lg font-semibold text-gray-600">This month</h3>

    <section aria-labelledby="quick-links-title">
        <div class="rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
            <h2 class="sr-only" id="quick-links-title">Quick links</h2>

            <div class="bg-white px-4">
                <ul role="list" class="w-full divide-y divide-gray-200">
                    @forelse($registrations as $registration)
                    <li class="py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 min-w-0">
                                <a href="{{ $registration->registrable_type == 'App\Models\Event' ? route('event.show', $registration->registrable->id) : route('course.show', $registration->registrable->id) }}"
                                    class="text-sm font-medium text-gray-900 truncate hover:underline">
                                    {{ $registration->registrable->name }}
                                    @if ($registration->registrable->location)
                                    @ {{ $registration->registrable->location->name }}
                                    @endif
                                </a>
                                <p class="text-sm text-gray-500 truncate">
                                    {{$registration->registrable->start_date->format('d M, Y') }} -
                                    {{$registration->registrable->end_date->format('d M, Y') }}
                                    @ {{$registration->registrable->start_date->format('H:i') }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ $registration->registrable_type == 'App\Models\Event' ? route('event.show', $registration->registrable->id) : route('course.show', $registration->registrable->id) }}"
                                    class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-100">
                                    View
                                </a>
                            </div>
                        </div>
                    </li>

                    @empty
                    <li class="py-4 text-sm font-medium text-gray-500">
                        No Registrations found. Start registering into our
                        <a href="{{ route('courses.schedule') }}"
                            class="text-indigo-500 underline hover:text-indigo-700">
                            Courses
                        </a> or <a href="{{ route('events.catalogue') }}"
                            class="text-indigo-500 underline hover:text-indigo-700">
                            Events
                        </a>
                        now
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
</div>