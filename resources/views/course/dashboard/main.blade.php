<div class="flex flex-col h-screen overflow-y-auto">
    <div class="flex-none px-4 sm:px-0">
        @include('course.dashboard._card')
    </div>
    <div class="mt-4 px-4 sm:px-0">
        <h1 class="sr-only">Recent Lessons</h1>
        <ul role="list" class="space-y-4">
            @foreach ($course->lessons->sortDesc() as $lesson)
            <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                <livewire:course.lesson-card :lesson="$lesson" wire:key="{{ $item->id }}" />
            </li>
            @endforeach
        </ul>
        <div class="my-24">&nbsp;</div>
    </div>
</div>


{{-- <div
    class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
    <div class="px-6 py-5 text-sm font-medium text-center">

    </div>

    <div class="px-6 py-5 text-sm font-medium text-center">
        <a href="{{ route('profile.likes') }}" class="inline-flex items-center text-gray-600 hover:text-indigo-700">
            <span class="mr-2">
                @include('icons.heart-fill')
            </span>
            {{ auth()->user()->likesCount() }}
        </a>
    </div>

    <div class="px-6 py-5 text-sm font-medium text-center">
        <a href="{{ route('profile.registrations') }}"
            class="inline-flex items-center text-gray-600 hover:text-indigo-700">
            <span class="mr-2">
                @include('icons.edit')
            </span>
            {{ auth()->user()->registrationsCount() }}
        </a>
    </div>
</div> --}}