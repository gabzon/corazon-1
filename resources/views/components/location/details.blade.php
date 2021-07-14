<div>
    <div>
        <dl class="divide-y divide-gray-200">
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Name</dt>
                <dd class="text-gray-900">{{ $location->name }}</dd>
            </div>
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Address</dt>
                <dd class="text-gray-900">{{ $location->address }}</dd>
            </div>
            @if ($location->address_info)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Address extra</dt>
                <dd class="text-gray-900">{{ $location->address_info }}</dd>
            </div>
            @endif

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Postal code</dt>
                <dd class="text-gray-900">{{ $location->postal_code }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">State</dt>
                <dd class="text-gray-900">{{ $location->city->state }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Neighborhood</dt>
                <dd class="text-gray-900">{{ $location->neighborhood }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">City</dt>
                <dd class="text-gray-900">{{ $location->city->name }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Google Maps</dt>
                <dd class="text-gray-900"><a href="{{ $location->google_maps_shortlink }}"
                        class="text-indigo-500 hover:text-indigo-700">link</a>
                </dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Public transportation</dt>
                <dd class="text-gray-900"></dd>
            </div>
        </dl>
        {{ $location->public_transportation }}
    </div>
    <div class="my-5 border rounded-xl overflow-hidden shadow-sm">
        {!! $location->google_maps !!}
    </div>
</div>