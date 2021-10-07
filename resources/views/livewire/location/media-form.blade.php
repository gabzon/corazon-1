<form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
    <div class="py-6 sm:col-span-6">
        <label for="Photos" class="block text-sm font-medium text-gray-700">
            Photos
        </label>
        <div class="mt-1 w-full">
            <x-media-library-attachment name="photos" multiple />
        </div>
    </div>
    <div class="py-6 sm:col-span-6">
        <div class="mb-4">
            <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                {!! $location->video !!}
            </div>
        </div>
        <label for="location.video" class="block text-sm font-medium text-gray-700">
            Video
        </label>
        <div class="mt-1">
            <textarea id="location.video" name="video" rows="3" wire:model="location.video"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">Write a few sentences about the location.</p>
    </div>

    <div class="pt-5">
        <div class="flex justify-end items-center">
            <x-partials.saved-confirmation />
            <a href="{{ route('location.index') }}"
                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cancel
            </a>
            <button type="submit"
                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </div>
</form>