<section>
    <div class="bg-white py-4 shadow  sm:rounded-lg">
        <article>
            <h2 class="px-4 sm:px-6 text-base font-medium text-gray-900">
                Venue
            </h2>
            <div class="px-4 sm:px-6 pt-2">
                {!! $event->location->google_maps !!}
            </div>
            <div class="px-4 sm:px-6 flex space-x-3 pt-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $event->location->photo }}" alt="">
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:underline">{{ $event->location->name }}</a>
                    </p>
                    <span class="text-sm text-gray-500">{{ $event->name }}</span>
                </div>
            </div>
            <div class="px-4 sm:px-6 pt-2">
                <dl class="mt-2 border-gray-200 divide-y divide-gray-200">
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Address</dt>
                        <dd class="text-gray-900">
                            {{ $event->location->address }} {{ $event->location->address_info ?? '' }}
                        </dd>
                    </div>

                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">City</dt>
                        <dd class="text-gray-900">
                            {{ $event->location->city->name }}
                        </dd>
                    </div>
                    @if ($event->location->zip)
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Zip code</dt>
                        <dd class="text-gray-900">
                            {{ $event->location->zip }}
                        </dd>
                    </div>
                    @endif

                    @if ($event->location->country)
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Country</dt>
                        <dd class="text-gray-900">
                            {{ $event->location->country }}
                        </dd>
                    </div>
                    @endif

                </dl>
            </div>
        </article>
    </div>
</section>