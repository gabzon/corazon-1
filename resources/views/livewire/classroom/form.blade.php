<div>
    <form wire:submit.prevent="{{ $action }}" class="space-y-8 divide-y divide-gray-200">
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="location" class="block text-sm font-medium text-gray-700">
                    Location
                </label>
                <div class="mt-1">
                    <select id="location" name="location" wire:model="location"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" selected disabled>Choose location</option>
                        @foreach (\App\Models\Location::all() as $l)
                        <option value="{{ $l->id }}">{{ $l->name }} ({{ $l->city->name }})</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="sm:col-start-1 sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    Name
                </label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" autocomplete="name" wire:model="name"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="slug" class="block text-sm font-medium text-gray-700">
                    Slug
                </label>
                <div class="mt-1">
                    <input type="text" name="slug" id="slug" wire:model="slug" disabled
                        class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="m2" class="block text-sm font-medium text-gray-700">
                    Squared Meters
                </label>
                <div class="mt-1">
                    <input type="number" name="m2" id="m2" wire:model="m2"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="location_id" class="block text-sm font-medium text-gray-700">
                    Capacity
                </label>
                <div class="mt-1">
                    <input type="number" name="capacity" id="capacity" wire:model="capacity"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="limit_couples" class="block text-sm font-medium text-gray-700">
                    Limit of couples
                </label>
                <div class="mt-1">
                    <input type="number" name="limit_couples" id="limit_couples" wire:model="limit_couples"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="color" class="block text-sm font-medium text-gray-700">
                    Color
                </label>
                <div class="mt-1">
                    <select id="color" name="color" autocomplete="color" wire:model="color"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" default selected disabled>Choose a color</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="gray">Gray</option>
                        <option value="purple">Purple</option>
                        <option value="green">Green</option>
                        <option value="yellow">Yellow</option>
                        <option value="purple">Purple</option>
                        <option value="pink">Pink</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-start-1 sm:col-span-1">
                <label for="price_hour" class="block text-sm font-medium text-gray-700">
                    Price/hour
                </label>
                <div class="mt-1">
                    <input type="number" name="price_hour" id="price_hour" wire:model="price_hour" step="0.01"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="price_month" class="block text-sm font-medium text-gray-700">
                    Price/month
                </label>
                <div class="mt-1">
                    <input
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        type="number" name="price_month" id="price_month" wire:model="price_month" step="0.01">
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="comments" class="block text-sm font-medium text-gray-700">
                    Comments
                </label>
                <div class="mt-1">
                    <textarea id="comments" name="comments" rows="3" wire:model="comments"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about the classroom.</p>
            </div>

            <div class="sm:col-span-2">
                <div class="space-y-4">
                    <div class="relative flex items-start">
                        <div class="flex items-center h-5">
                            <input id="danceShoes" name="danceShoes" type="checkbox" wire:model="danceShoes"
                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Dancing shoes?</label>
                            <p class="text-gray-500">Some locations require people to use stricly dancing shoes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="photos" class="block text-sm font-medium text-gray-700">
                    Photos
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex justify-center text-sm text-gray-600">
                            <label for="photos"
                                class="relative cursor-pointer bg-white p-2 rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="photos" name="photos" wire:model="photos" type="file" class="sr-only"
                                    multiple>
                            </label>
                            {{-- <p class="pl-1">or drag and drop</p> --}}
                        </div>
                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF up to 10MB
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>