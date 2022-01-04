<div>
    <div class="px-4 sm:px-0">
        <section aria-labelledby="profile-overview-title">
            <div class="rounded-lg bg-white overflow-hidden shadow">
                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                <div class="bg-white p-6">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex sm:space-x-5">
                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                <p class="text-sm font-medium text-gray-600">{{ $course->level }}</p>
                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $course->name }}</p>
                                <p class="text-sm font-medium text-gray-600">
                                    {{ $course->start_date->format('M d') }} - {{ $course->end_date->format('M d') }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 flex justify-center sm:mt-0">
                            <a href="#"
                                class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                View profile
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
                    <div class="px-6 py-5 text-sm font-medium text-center">
                        <a href="#" class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                            <span class="mr-2">
                                @include('icons.bookmark-star')
                            </span>
                            bookmarks
                        </a>
                    </div>

                    <div class="px-6 py-5 text-sm font-medium text-center">
                        <a href="#" class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                            <span class="mr-2">
                                @include('icons.heart')
                            </span>
                            likes
                        </a>
                    </div>

                    <div class="px-6 py-5 text-sm font-medium text-center">
                        <span class="text-gray-900">2</span>
                        <span class="text-gray-600">Registrations</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="mt-4">
        <h1 class="sr-only">Recent questions</h1>
        <ul role="list" class="space-y-4">
            @foreach ($course->lessons as $lesson)
            <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                <livewire:course.lesson-card :lesson="$lesson" wire:key="{{$item->id}}" />
            </li>
            @endforeach
        </ul>
        <div class="my-10">&nbsp;</div>
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