<section aria-labelledby="profile-overview-title">
    <div class="rounded-lg bg-white overflow-hidden shadow">
        <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
        <div class="bg-white p-6">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="sm:flex sm:space-x-5">
                    <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                        <div
                            class="flex text-sm font-medium text-gray-600 capitalize items-center space-x-2 justify-center sm:justify-start">
                            {{ $event->start_date->format('M d Y') }} -
                            {{ $event->end_date->format('M d Y') }}
                            <span class="ml-2">
                                <x-shared.status-dot status="{{ $event->status }}" />
                            </span>
                        </div>
                        <p class="text-xl font-bold text-gray-900 sm:text-2xl">
                            {{ $event->name }}
                        </p>
                        <p class="text-sm font-medium text-gray-600">
                            <b class="capitalize">{{ $event->type }}</b> {{ implode(',',
                            $event->styles->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </div>
                {{-- $table->string('thumbnail')->nullable(); --}}
                <div class="mt-5 flex justify-center sm:mt-0">
                    <a href="{{ route('lesson.create', ['event' => $event ]) }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Add Workshop
                    </a>

                </div>
            </div>
        </div>
        <div
            class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
            <div class="px-6 py-5 text-sm font-medium text-center">
                <a href="{{ route('event.bookmarks', $event) }}"
                    class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                    <span class="mr-2">
                        @include('icons.bookmark-star')
                    </span>
                    {{ trans_choice(
                    '{0} no bookmarks|{1} :count bookmark|[2,*] :count bookmarks',
                    $event->bookmarks()->count(), ['count' =>
                    $event->bookmarks()->count()])}}
                </a>
            </div>

            <div class="px-6 py-5 text-sm font-medium text-center">
                <a href="{{ route('event.favorites', $event )}}"
                    class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                    <span class="mr-2">
                        @include('icons.heart')
                    </span>
                    {{ trans_choice(
                    '{0} no favorites|{1} :count favorite|[2,*] :count favorites',
                    $event->favorites()->count(), ['count' =>
                    $event->favorites()->count()])}}
                </a>
            </div>

            <div class="px-6 py-5 text-sm font-medium text-center">
                <a href="{{ route('event.registrations', $event )}}"
                    class="inline-flex items-center text-gray-600 hover:text-indigo-700">
                    <span class="mr-2">
                        @include('icons.edit')
                    </span>
                    {{ trans_choice(
                    '{0} no registrations|{1} :count registration|[2,*] :count registrations',
                    $event->registrations()->count(), ['count' =>
                    $event->registrations()->count()])}}
                </a>
            </div>
        </div>
    </div>
</section>