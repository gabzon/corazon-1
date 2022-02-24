<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $event->name}}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                @can('update', $event)
                <a href="{{ route('event.edit', $event) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="h-screen overflow-y-scroll">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-full lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('event.dashboard.nav')
            </div>
            <main class="lg:col-span-9 xl:col-span-6 overflow-y-scroll">
                <div class="py-4 sm:py-6 md:py-8 lg:py-10">
                    <div class="space-y-4">
                        <section class="bg-white shadow sm:rounded-lg">
                            <img src="{{ $event->coverImage }}" alt="" class="sm:rounded-t-lg">
                            <div class="py-4 px-6 sm:p-6">
                                <h2 class="text-base font-medium text-gray-900">
                                    Information
                                </h2>
                                <div class="my-2">
                                    <dl class="mt-2 border-gray-200 divide-y divide-gray-200">
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Start Time</dt>
                                            <dd class="text-gray-900">
                                                {{ $event->start_date->format('F d, Y') }} @ {{
                                                $event->start_date->format('H:i') }}
                                            </dd>
                                        </div>

                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">End Time</dt>
                                            <dd class="text-gray-900">
                                                {{ $event->end_date->format('F d, Y') }} @
                                                {{ $event->end_date->format('H:i') }}
                                            </dd>
                                        </div>

                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Type</dt>
                                            <dd class="text-gray-900">{{ $event->type }}</dd>
                                        </div>

                                        @if ($event->organizations->count() > 0)
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">School</dt>
                                            <dd class="text-gray-900">
                                                <ul>
                                                    @foreach ($event->organizations as $org)
                                                    <li>
                                                        <a href="{{ route('organization.view', $org) }}"
                                                            class="text-indigo-500 hover:text-indigo-800">
                                                            {{ $org->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </dd>
                                        </div>
                                        @endif

                                        @if ($event->tagline)
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Tagline</dt>
                                            <dd class="text-gray-900">{{ $event->tagline }}</dd>
                                        </div>
                                        @endif

                                        @if ($event->keywords )
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Keywords</dt>
                                            <dd class="text-gray-900">{{ $event->keywords }}</dd>
                                        </div>
                                        @endif

                                        @if ($event->duration)
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Duration</dt>
                                            <dd class="text-gray-900">{{ $event->duration }}</dd>
                                        </div>
                                        @endif

                                        @if ($event->registration_url)
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Registration URL</dt>
                                            <dd class="text-gray-900">{{ $event->registration_url }}</dd>
                                        </div>
                                        @endif

                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Private</dt>
                                            <dd class="text-gray-900">{{ $event->is_private ? 'Yes':'No' }}</dd>
                                        </div>

                                        {{-- <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Standby</dt>
                                            <dd class="text-gray-900">{{ $event->standby ? 'Yes':'No' }}</dd>
                                        </div> --}}

                                        @if ($event->courses)
                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Workshops</dt>
                                            <dd class="text-gray-900">{{ $event->event }}
                                                <ul>
                                                    @foreach ($event->courses as $class)
                                                    <li>{{ $class->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </dd>
                                        </div>
                                        @endif

                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Author</dt>
                                            <dd class="text-gray-900">{{ $event->user->name }}</dd>
                                        </div>

                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Created at</dt>
                                            <dd class="text-gray-900">{{ $event->created_at}}</dd>
                                        </div>

                                        <div class="py-3 flex justify-between text-sm font-medium">
                                            <dt class="text-gray-500">Updated at</dt>
                                            <dd class="text-gray-900">{{ $event->updated_at }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </section>
                        <section class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                            <h2 class="text-base font-medium text-gray-900">
                                Description
                            </h2>
                            <div class="mt-2 text-sm text-gray-700 space-y-4">
                                {{ $event->excerpt }}
                                {!! $event->description !!}
                                <div>
                                    {!! $event->video !!}
                                </div>
                            </div>
                        </section>

                        {{-- @include('course.dashboard.organization') --}}

                        @include('event.dashboard.location')
                        <section>

                        </section>
                        <div>
                            <div class="my-30">&nbsp;</div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>


            </main>
            <aside class="hidden xl:block xl:col-span-4 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('event.dashboard.aside')
            </aside>
        </div>
    </div>

</x-app-layout>