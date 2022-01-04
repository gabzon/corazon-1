<div class="sticky top-4 space-y-4">
    <section aria-labelledby="who-to-follow-heading">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">
                    Instructors
                </h2>
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                        @forelse ($course->instructors as $teacher)
                        <li class="flex items-center py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ $teacher->photo }}"
                                    alt="{{ $teacher->name }}">
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#">{{ $teacher->name }}</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a href="#">{{ $teacher->email }}</a>
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                {{-- <button type="button"
                                    class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                                    <!-- Heroicon name: solid/plus-sm -->
                                    <svg class="-ml-1 mr-0.5 h-5 w-5 text-rose-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </button> --}}
                            </div>
                        </li>
                        @empty
                        <li class="flex items-center py-4 space-x-3">
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-500">
                                    No instructors found
                                </p>
                            </div>
                        </li>

                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section aria-labelledby="trending-heading">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h2 id="trending-heading" class="text-base font-medium text-gray-900">
                    Students
                </h2>
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                        @forelse ($course->students as $student)

                        @if ($student->getCourseRegistrationStatus($course) == 'registered' ||
                        $student->getCourseRegistrationStatus($course) == 'partial')
                        <li class="flex items-center py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ $student->photo }}"
                                    alt="{{ $student->name }}">
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#">{{ $student->name }}</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a href="#">{{ '@' . $student->username }}</a>
                                </p>
                            </div>
                            <div class="flex-shrink-0">

                                <livewire:profile.user-registration-status-badge :model="$course" size="small"
                                    :user="$student" wire:key="{{ $student->id }}" />
                            </div>
                        </li>
                        @endif

                        @if ($loop->index == 4) @break @endif

                        @empty
                        <li class="flex items-center py-4 space-x-3">
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-500">
                                    No students found
                                </p>
                            </div>
                        </li>
                        @endforelse
                    </ul>
                </div>
                <div class="mt-6">
                    <a href="{{ route('course.students', $course) }}"
                        class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>