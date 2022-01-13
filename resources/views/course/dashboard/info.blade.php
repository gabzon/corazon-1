<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $course->name}}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                @can('update', $course)
                <a href="{{ route('course.edit', $course) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="min-h-full">

        <div class="max-w-3xl mx-auto px-3 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('course.dashboard.left')
            </div>
            <main class="lg:col-span-9 xl:col-span-6 h-screen overflow-y-scroll">
                <div class="py-4 sm:py-6 md:py-8 lg:py-10">
                    @include('course.dashboard._mobile-menu')
                    <div class="space-y-4">
                        <section class="bg-white py-4 px-6 shadow sm:p-6 sm:rounded-lg">
                            <h2 class="text-base font-medium text-gray-900">
                                Information
                            </h2>
                            <div class="my-2">
                                <dl class="mt-2 border-gray-200 divide-y divide-gray-200">
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Period</dt>
                                        <dd class="text-gray-900">
                                            {{ $course->start_date->format('M j Y') }} -
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
                                            <span class="uppercase">{{ $course->level_code }}</span>
                                            {{ $course->level_number }}
                                        </dd>
                                    </div>

                                    @if ($course->level_label )
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Level label</dt>
                                        <dd class="text-gray-900">{{ $course->level_label }}</dd>
                                    </div>
                                    @endif

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Type</dt>
                                        <dd class="text-gray-900">{{ $course->type }}</dd>
                                    </div>

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Focus</dt>
                                        <dd class="text-gray-900">{{ $course->focus }}</dd>
                                    </div>


                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">School</dt>
                                        <dd class="text-gray-900">
                                            <a href="{{ route('organization.show', $course->organization) }}"
                                                class="text-indigo-500 hover:text-indigo-800">
                                                {{ $course->organization->name }}
                                            </a>
                                        </dd>
                                    </div>

                                    @if ($course->tagline)
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Tagline</dt>
                                        <dd class="text-gray-900">{{ $course->tagline }}</dd>
                                    </div>
                                    @endif

                                    @if ($course->keywords )
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Keywords</dt>
                                        <dd class="text-gray-900">{{ $course->keywords }}</dd>
                                    </div>
                                    @endif

                                    @if ($course->duration)
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Duration</dt>
                                        <dd class="text-gray-900">{{ $course->duration }}</dd>
                                    </div>
                                    @endif

                                    @if ($course->registration_url)
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Registration URL</dt>
                                        <dd class="text-gray-900">{{ $course->registration_url }}</dd>
                                    </div>
                                    @endif

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Private</dt>
                                        <dd class="text-gray-900">{{ $course->is_private ? 'Yes':'No' }}</dd>
                                    </div>

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Standby</dt>
                                        <dd class="text-gray-900">{{ $course->standby ? 'Yes':'No' }}</dd>
                                    </div>

                                    @if ($course->event)
                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Event</dt>
                                        <dd class="text-gray-900">{{ $course->event }}</dd>
                                    </div>
                                    @endif

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Author</dt>
                                        <dd class="text-gray-900">{{ $course->user->name }}</dd>
                                    </div>

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Created at</dt>
                                        <dd class="text-gray-900">{{ $course->created_at}}</dd>
                                    </div>

                                    <div class="py-3 flex justify-between text-sm font-medium">
                                        <dt class="text-gray-500">Updated at</dt>
                                        <dd class="text-gray-900">{{ $course->updated_at }}</dd>
                                    </div>
                                </dl>
                            </div>
                        </section>


                        <section class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                            <h2 class="text-base font-medium text-gray-900">
                                Description
                            </h2>
                            <div class="mt-2 text-sm text-gray-700 space-y-4">
                                {{ $course->excerpt }}
                                {!! $course->description !!}
                                <div>
                                    {!! $course->video1 !!}
                                </div>
                                <div>
                                    {!! $course->video2 !!}
                                </div>
                                <div>
                                    {!! $course->video3 !!}
                                </div>
                            </div>
                        </section>

                        @include('course.dashboard.organization')

                        @include('course.dashboard.location')
                    </div>
                </div>
            </main>
            <aside class="hidden xl:block xl:col-span-4 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('course.dashboard.right')
            </aside>
        </div>

    </div>

</x-app-layout>