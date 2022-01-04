<div class="mt-3 sm:mt-4 md:mt-5 lg:mt-6">
    @if ($course->getMedia('courses')->last() != null)
    <img src="{{ $course->getMedia('courses')->last()->getUrl() }}" alt="" class="h-60 object-cover w-full rounded-md">
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
            <dd class="text-gray-900">{{ $course->level }} {{ $course->level_number }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
            <dt class="text-gray-500">School</dt>
            <dd class="text-gray-900">{{ $course->organization->name }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
            <dt class="text-gray-500">Focus</dt>
            <dd class="text-gray-900">{{ $course->focus }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
            <dt class="text-gray-500">Price</dt>
            <dd class="text-gray-900">Kn {{ $course->full_price }}</dd>
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

<x-partials.social-links :model="$course->organization" />


<div class="mt-9 pb-3 flex sm:flex-col1">
    @guest
    <div class="inline-flex items-center">
        <a href="http://"
            class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">
            Login
        </a>
        <a href="" class="ml-2 text-sm font-medium text-gray-500 hover:text-indigo-700">
            or create an account here <span aria-hidden="true">&rarr;</span>
        </a>
    </div>
    @endguest
    @auth
    <div class="flex space-x-1">
        <livewire:shared.registration-button :model="$course" />
        <livewire:shared.bookmark :model="$course" />
        <livewire:shared.like :model="$course" />
    </div>

    @endauth
</div>


{{-- <div class="flex">
    <button type="button"
        class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Register
    </button>
    <button type="button"
        class="flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Share
    </button>
    <br>
</div> --}}
<br>