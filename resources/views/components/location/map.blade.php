<div class="grid grid-cols-6 gap-10">
    <div class="col-span-6 lg:col-span-3 xl:col-span-2">
        <dl class="divide-y divide-gray-200">

            @if ($location->address)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Address</dt>
                <dd class="text-gray-900">{{ $location->address }}</dd>
            </div>
            @endif

            @if ($location->address_info)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Address extra</dt>
                <dd class="text-gray-900">{{ $location->address_info }}</dd>
            </div>
            @endif

            @if ($location->postal_code)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Postal code</dt>
                <dd class="text-gray-900">{{ $location->postal_code }}</dd>
            </div>
            @endif


            @if ($location->city->state)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">State</dt>
                <dd class="text-gray-900">{{ $location->city->state }}</dd>
            </div>
            @endif

            @if ($location->neighborhood)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Neighborhood</dt>
                <dd class="text-gray-900 capitalize">{{ $location->neighborhood }}</dd>
            </div>
            @endif

            @if ($location->city->name)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">City</dt>
                <dd class="text-gray-900">{{ $location->city->name }}</dd>
            </div>
            @endif

            @if ($location->google_maps_shortlink)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Google Maps</dt>
                <dd class="text-gray-900"><a href="{{ $location->google_maps_shortlink }}">Open</a>
                </dd>
            </div>
            @endif

            @if ($location->postal_code)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Public transportation</dt>
                <dd class="text-gray-900"></dd>
            </div>
            @endif
        </dl>
        {{ $location->public_transportation }}
        <br>
        <x-shared.photo-gallery :photos="$photos" />
    </div>
    <div class="col-span-6 lg:col-span-3 xl:col-span-4">
        <div class="border rounded-xl overflow-hidden shadow-sm">
            {!! $location->google_maps !!}
        </div>
    </div>
</div>