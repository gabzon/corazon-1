<div class="bg-white min-h-screen">
    <div class="sticky top-6 space-y-4 px-3 sm:px-4 md:px-6 lg:px-8">
        <div class="mt-3 sm:mt-3 md:mt-3 lg:mt-3">
            <x-location.description-card :location="$location" />
        </div>
        <div class="pt-2 space-y-6">
            @if ($location->contract)
            <div>
                <h3 class="font-medium text-gray-900">Contract</h3>
                <a href="{{ asset($location->contract) }}" target="_blank"
                    class="block bg-indigo-600 text-white text-center py-2 mt-2 rounded-lg">Download</a>
            </div>
            @endif

            @if ($location->comments)
            <div>
                <h3 class="font-medium text-gray-900">Comments</h3>
                <div class="mt-2 flex items-center justify-between">
                    <p class="text-sm text-gray-500 italic mb-10">
                        {{ $location->comments }}
                    </p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>