<aside class="bg-white min-h-screen">
    <div class="sticky top-6 space-y-4 px-3 sm:px-4 md:px-6 lg:px-8">
        <div class="mt-3 sm:mt-3 md:mt-3 lg:mt-3">
            <img src="{{ $event->thumbnail ?? 'https://source.unsplash.com/random' }}" alt=""
                class="h-60 object-cover w-full rounded-md">
            {{-- {{ $event->getMedia('')->last()->getUrl()}} --}}
        </div>
        <div>
            <h3 class="font-medium text-gray-900">Information</h3>
            <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Date</dt>
                    <dd class="text-gray-900">{{ $event->start_date->format('M j Y') }} -
                        {{ $event->end_date->format('M j Y') }}</dd>
                </div>

                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Time</dt>
                    <dd class="text-gray-900">
                        {{ $event->start_time->format('H:i') }} - {{ $event->end_time->format('H:i') }}
                    </dd>
                </div>

                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Type</dt>
                    <dd class="text-gray-900 capitalize">{{ $event->type }}</dd>
                </div>

                @if ($event->email)
                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Email</dt>
                    <dd class="text-gray-900 capitalize">{{ $event->email }}</dd>
                </div>
                @endif

                @if ($event->phone)
                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Phone</dt>
                    <dd class="text-gray-900 capitalize">{{ $event->phone }}</dd>
                </div>
                @endif

                @if ($event->is_free)
                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Price</dt>
                    <dd class="text-gray-900 uppercase">Free</dd>
                </div>
                @endif

                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">Style(s)</dt>
                    <dd class="text-gray-900 text-right">
                        @foreach ($event->styles as $item)
                        <span class="block">{{ $item->name }}</span>
                        @endforeach
                    </dd>
                </div>
            </dl>
        </div>

        <x-partials.social-links :model="$event" />

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
    </div>
</aside>