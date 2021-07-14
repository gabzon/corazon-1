<x-guest-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-700 sm:text-3xl sm:truncate">
                    {{ $course->name }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('course.edit', $course) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gray-50">
        <div class="max-w-3xl mx-auto lg:max-w-full lg:grid lg:grid-cols-12 gap-3 sm:gap-4 md:gap-5 lg:gap-6 xl:gap-8">
            <main class="lg:col-span-12 xl:col-span-9 order-last sm:order-first">
                <div class="ml-3 sm:ml-4 md:ml-5 lg:ml-6 xl:ml-8 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-5 gap-6">
                        <div class="col-span-5 sm:col-span-2 space-y-6 pr-3">
                            @if ($course->video1)
                            <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                                {!! $course->video1 !!}
                            </div>
                            @endif
                            @if ($course->video2)
                            <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                                {!! $course->video2 !!}
                            </div>
                            @endif
                            @if ($course->video3)
                            <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                                {!! $course->video3 !!}
                            </div>
                            @endif
                        </div>
                        <div class="col-span-5 sm:col-span-3 space-y-6">
                            <div class="prose leading-5">
                                <h3>{{ $course->tagline }}</h3>
                                <div class="mb-4">{{ $course->excerpt }}</div>
                                <div>{!! $course->description !!}</div>
                            </div>
                            <div class="mr-3 sm:mr-0">
                                <table class="w-full">
                                    <tr class="py-3 text-sm font-medium border-b">
                                        <td class="text-gray-500 py-2">Styles</td>
                                        <td class="text-gray-900 py-2">
                                            @foreach ($course->styles as $item)
                                            {{ $item->name }},
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-sm font-medium border-b">
                                        <td class="text-gray-500 py-2">Type</td>
                                        <td class="text-gray-900 py-2">{{ $course->type }}</td>
                                    </tr>
                                    <tr class="text-sm font-medium border-b">
                                        <td class="text-gray-500 py-2">Focus</td>
                                        <td class="text-gray-900 py-2">{{ $course->focus }}</td>
                                    </tr>
                                    <tr class="text-sm font-medium border-b">
                                        <td class="text-gray-500 py-2">Duration</td>
                                        <td class="text-gray-900 py-2">{{ $course->duration }}</td>
                                    </tr>
                                    <tr class="text-sm font-medium border-b">
                                        <td class="text-gray-500 py-2">Classroom</td>
                                        <td class="text-gray-900 py-2">{{ $course->classroom->name }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="mr-3 sm:mr-0">
                                <h3 class="flex-1 text-lg font-bold text-gray-900">Address</h3>
                                <x-location.map :location="$course->classroom->location" />
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <aside class="xl:col-span-3 bg-white min-h-screen">
                <div class="sticky top-6 space-y-4 px-3 sm:px-4 md:px-6 lg:px-8">
                    <div class="mt-3 sm:mt-4 md:mt-5 lg:mt-6">
                        <img src="{{ $course->thumbnail ?? 'https://source.unsplash.com/random' }}" alt=""
                            class="h-60 object-cover w-full rounded-md">
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-900">Information</h3>
                        <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                            <div class="py-3 flex justify-between text-sm font-medium">
                                <dt class="text-gray-500">Period</dt>
                                <dd class="text-gray-900">{{ $course->start_date->format('F j') }} -
                                    {{ $course->end_date->format('F j')}}</dd>
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
                                <dt class="text-gray-500">Price</dt>
                                <dd class="text-gray-900">Kn {{ $course->full_price }}</dd>
                            </div>
                        </dl>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-900">Instructors</h3>
                        <ul class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                            @foreach ($course->instructors as $instructor)
                            <li class="py-3 flex justify-between items-center">
                                <div class="flex items-center">
                                    <img src="{{ $instructor->profile_photo_url }}" alt="" class="w-8 h-8 rounded-full">
                                    <p class="ml-4 text-sm font-medium text-gray-900">{{ $instructor->name }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <x-partials.social-links :model="$course" />
                    <div class="flex">
                        <button type="button"
                            class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Register
                        </button>
                        <button type="button"
                            class="flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Share
                        </button>
                        <br>
                    </div>
                    <br>
                </div>
            </aside>
        </div>
    </div>

</x-guest-layout>