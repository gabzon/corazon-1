<div class="space-y-6">
    <div>
        <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
            {!! $location->video ?? ''!!}
            {{-- <img src="{{ asset($location->logo) }}" alt="" class="object-cover"> --}}
        </div>
        <div class="mt-4 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for
                    </span>{{ $location->name }}</h2>
                <p class="text-sm font-medium text-gray-500">{{ $location->shortname }}</p>
            </div>
            <span class="text-sm font-medium text-gray-400 py-2 capitalize">{{ $location->type }}</span>
        </div>
    </div>
    <div>
        <h3 class="font-medium text-gray-900">Information</h3>
        <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Contact</dt>
                <dd class="text-gray-900">{{ $location->contact }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Email</dt>
                <dd class="text-gray-900">{{ $location->email }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Phone</dt>
                <dd class="text-gray-900">{{ $location->phone }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Neighborhood</dt>
                <dd class="text-gray-900">{{ $location->neighborhood }}</dd>
            </div>

            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Entry code</dt>
                <dd class="text-gray-900">{{ $location->entry_code }}</dd>
            </div>


        </dl>
    </div>
    <div>
        <div class="inline-flex items-center space-x-4">
            @if ($location->facebook)
            <a href="{{ $location->facebook }}" class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
                @include('icons/social/facebook')
            </a>
            @endif

            @if ($location->twitter)
            <a href="{{ $location->twitter }}" class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
                @include('icons/social/twitter')
            </a>
            @endif

            @if ($location->instagram)
            <a href="{{ $location->instagram }}" class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
                @include('icons/social/instagram')
            </a>
            @endif

            @if ($location->youtube)
            <a href="{{ $location->youtube }}" class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
                @include('icons/social/youtube')
            </a>
            @endif

            @if ($location->tiktok)
            <a href="{{ $location->tiktok }}" class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
                @include('icons/social/tiktok')
            </a>
            @endif

            @if ($location->website)
            <a href="{{ $location->website }}" class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
                @include('icons/website')
            </a>
            @endif
        </div>
    </div>
</div>