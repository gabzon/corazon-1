<div>
    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <x-form.text-input wire:model="city.name" name="city.name" label="Name" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form.slug-input wire:model="city.slug" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="city.state" name="city.state" label="State" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="city.region" name="city.region" label="Region" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="city.zip" name="city.zip" label="Zip" />
                    </div>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.iataCode" name="city.iataCode" label="IATA Code" />
                    </div>
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.code" name="city.code" label="Code" />
                    </div>
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.lat" name="city.lat" label="Latitude" />
                    </div>
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.lng" name="city.lng" label="Longitude" />
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-4">
                        <x-form.textarea wire:model="city.description" label="Description" name="description" rows="3"
                            description="Write a few sentences about the city." />
                    </div>

                    <div class="sm:col-span-1">
                        <x-form.select wire:model="city.country" name="city.country" :options="$countries"
                            label="Country" />
                    </div>
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.alpha2Code" name="city.alpha2Code" label="alpha2Code" />
                    </div>
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.alpha3Code" name="city.alpha3Code" label="alpha3Code" />
                    </div>
                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="city.world_region" name="city.world_region"
                            label="World Region" />
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="image" class="block text-sm font-medium text-gray-700">
                            Image
                        </label>
                        <div class="mt-1 flex items-center">
                            <x-form.media-library name="image" :model="$city" collection="city-image" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="Emblem" class="block text-sm font-medium text-gray-700">
                            Emblem
                        </label>
                        <div class="mt-1 flex items-center">
                            <x-form.media-library name="emblem" :model="$city" collection="city-emblem" />
                        </div>
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