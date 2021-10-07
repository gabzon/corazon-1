<div class="space-y-6">
    <div>
        @if ($organization->video)
        <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
            {!! $organization->video ?? ''!!}
            {{-- <img src="{{ asset($location->logo) }}" alt="" class="object-cover"> --}}
        </div>
        @else
        @if ($organization->getMedia('organization-logos')->last() != null)
        <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
            <img src="{{ $organization->getMedia('organization-logos')->last()->getUrl() }}" alt=""
                class="object-cover">
        </div>
        @endif
        @endif

        <div class="mt-4 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for
                    </span>{{ $organization->name }}</h2>
                <p class="text-sm font-medium text-gray-500">{{ $organization->slug }}</p>
            </div>
            <button type="button"
                class="ml-4 bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <!-- Heroicon name: outline/heart -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span class="sr-only">Favorite</span>
            </button>
        </div>
    </div>
    <div>
        <h3 class="font-medium text-gray-900">Information</h3>
        <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
            @if ($organization->contact)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Contact</dt>
                <dd class="text-gray-900">{{ $organization->contact }}</dd>
            </div>
            @endif
            @if ($organization->email)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Email</dt>
                <dd class="text-gray-900">{{ $organization->email }}</dd>
            </div>
            @endif

            @if ($organization->phone)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Phone</dt>
                <dd class="text-gray-900">{{ $organization->phone }}</dd>
            </div>
            @endif

            @if ($organization->type)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Type</dt>
                <dd class="text-gray-900">{{ $organization->type }}</dd>
            </div>
            @endif

            @if ($organization->oid)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">OID</dt>
                <dd class="text-gray-900">{{ $organization->oid }}</dd>
            </div>
            @endif

            @if ($organization->status)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Status</dt>
                <dd class="text-gray-900">{{ $organization->status }}</dd>
            </div>
            @endif
        </dl>
    </div>
</div>