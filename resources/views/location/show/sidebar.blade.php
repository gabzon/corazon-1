<div class="bg-white min-h-screen">
    <div class="sticky top-6 space-y-4 px-3 sm:px-4 md:px-6 lg:px-8">
        <div class="mt-3 sm:mt-3 md:mt-3 lg:mt-3">
            <x-location.description-card :location="$location" />
        </div>
        <div class="space-y-6">
            <div class="flex">
                <a href="{{ route('location.edit', $location) }}"
                    class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm text-center font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                <a type="a"
                    class="flex-1 ml-3 bg-white py-2 px-4 border border-red-500 rounded-md text-center shadow-sm text-sm font-medium text-red-700 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Delete
                </a>
            </div>
            <div>
                <h3 class="font-medium text-gray-900">Contract</h3>
                <a href="{{ asset($location->contract) }}" target="_blank"
                    class="block bg-indigo-600 text-white text-center py-2 mt-2 rounded-lg">Download</a>
            </div>
            <div>
                <h3 class="font-medium text-gray-900">Comments</h3>
                <div class="mt-2 flex items-center justify-between">
                    <p class="text-sm text-gray-500 italic">{{ $location->comments }}
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro facere quibusdam dolore natus
                        quia nam fugit saepe quam blanditiis! Saepe deleniti voluptatum debitis dolores quidem
                        exercitationem nulla voluptas dignissimos praesentium.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>