<form wire:submit.prevent="update" class="space-y-8 divide-y divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium text-gray-700">
                    City
                </label>
                <div class="mt-1">
                    <select id="city" name="city" wire:model="city"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" selected disabled>Select city</option>
                        @foreach (\App\Models\City::all() as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="neighborhood" class="block text-sm font-medium text-gray-700">
                    Neighborhood
                </label>
                <div class="mt-1">
                    <input type="text" name="neighborhood" id="neighborhood" autocomplete="neighborhood"
                        wire:model="neighborhood"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="postal_code" class="block text-sm font-medium text-gray-700">
                    Postal code
                </label>
                <div class="mt-1">
                    <input type="text" name="postal_code" id="postal_code" autocomplete="posta_code"
                        wire:model="postal_code"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="address" class="block text-sm font-medium text-gray-700">
                    Street address
                </label>
                <div class="mt-1">
                    <input type="text" name="address" id="address" autocomplete="address" wire:model="address"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="address_info" class="block text-sm font-medium text-gray-700">
                    Address Info
                </label>
                <div class="mt-1">
                    <input type="text" name="address_info" id="address_info" autocomplete="address_info"
                        wire:model="address_info"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="entry_code" class="block text-sm font-medium text-gray-700">
                    Entry code
                </label>
                <div class="mt-1">
                    <input type="text" name="entry_code" id="entry_code" autocomplete="entry_code"
                        wire:model="entry_code"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="google_maps" class="block text-sm font-medium text-gray-700">
                    Google Maps
                </label>
                <div class="mt-1">
                    <textarea id="google_maps" name="google_maps" rows="3" wire:model="google_maps"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Paste embed location from Google Maps.</p>
            </div>

            <div class="sm:col-span-4">
                <label for="google_maps_shortlink" class="block text-sm font-medium text-gray-700">
                    Google Maps Shortlink
                </label>
                <div class="mt-1">
                    <input type="url" name="google_maps_shortlink" id="google_maps_shortlink"
                        autocomplete="google_maps_shortlink" wire:model="google_maps_shortlink"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="public_transportation" class="block text-sm font-medium text-gray-700">
                    Public Transportation
                </label>
                <div class="mt-1">
                    <textarea id="public_transportation" name="public_transportation" rows="3"
                        wire:model="public_transportation"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences how to get to this location
                    (bus,tram,metro).</p>
            </div>

        </div>


        <div class="pt-5">
            <div class="flex justify-end items-center">
                <x-partials.saved-confirmation />
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
    </div>
</form>