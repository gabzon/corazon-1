<div>
    <div class="mt-3 sm:mt-4 md:mt-5 lg:mt-6">
        @if ($course->getMedia('courses')->last() != null)
        <img src="{{ $course->getMedia('courses')->last()->getUrl() }}" alt=""
            class="h-60 object-cover w-full rounded-md">
        @endif
    </div>


    <div>
        <h3 class="font-medium text-gray-900">Information</h3>
        <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Period</dt>
                <dd class="text-gray-900">{{ $course->start_date->format('M j Y') }} -
                    {{ $course->end_date->format('M j Y')}}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Schedule</dt>
                <dd class="text-gray-900">
                    <x-partials.display-day-time :course="$course" />
                </dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Level</dt>
                <dd class="text-gray-900">
                    {{ $course->level }}
                    <x-shared.level-tip level="{{ $course->level_code }}" /> {{ $course->level_number }}
                    @if ($course->level_label)
                    <span class="block text-gray-500 text-right">{{ $course->level_label }}</span>
                    @endif
                </dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Focus</dt>
                <dd class="text-gray-900">{{ $course->focus }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">School</dt>
                <dd class="text-gray-900">
                    <a href="{{ route('organization.view', $course->organization) }}"
                        class="text-indigo-500 hover:text-indigo-800">
                        {{ $course->organization->name }}
                    </a>
                </dd>
            </div>
        </dl>
    </div>
    <div>
        {{-- <h3 class="font-medium text-gray-900">Instructors</h3>
        <ul class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
            @foreach ($course->instructors as $instructor)
            <li class="py-3 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ $instructor->profile_photo_url }}" alt="" class="w-8 h-8 rounded-full">
                    <p class="ml-4 text-sm font-medium text-gray-900">{{ $instructor->name }}</p>
                </div>
            </li>
            @endforeach
        </ul> --}}
    </div>

    <div class="my-2">
        <x-partials.social-links :model="$course->organization" />
    </div>

    <div class="my-3">
        <x-shared.register-like-bookmark-buttons :model="$course" size="medium" />
    </div>

</div>