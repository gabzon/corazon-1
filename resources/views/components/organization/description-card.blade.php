<div class="space-y-6">
    <div>
        @if ($organization->getMedia('organization-logos')->last() != null)
        <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
            <img src="{{ $organization->getMedia('organization-logos')->last()->getUrl() }}" alt=""
                class="object-cover">
        </div>
        @endif

        <div class="mt-4 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for
                    </span>{{ $organization->name }}</h2>
                <p class="text-sm font-medium text-gray-500">{{ $organization->slug }}</p>
            </div>
            @auth
            <livewire:shared.favorite-button :model="$organization" />
            @endauth
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