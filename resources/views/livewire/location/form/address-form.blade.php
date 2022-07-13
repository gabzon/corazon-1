<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Address</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Write down all the information related to the location's address
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="update" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="location.address" name="location.address"
                                    label="Street address" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="location.address_info" name="location.address_info"
                                    label="Address Info" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="location.zip" name="location.zip" label="Postal Code" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="location.neighborhood" name="location.neighborhood"
                                    label="Neighborhood" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="location.entry_code" name="location.entry_code"
                                    label="Entry code" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-form.text-input wire:model="location.google_maps_shortlink"
                                    name="location.google_maps_shortlink" label="Google maps shortlink" />
                            </div>

                            <div class="col-span-6">
                                <x-shared.display-embed :embed="$location->google_maps" />
                                <x-form.textarea wire:model="location.google_maps" label="Google Maps Embed"
                                    name="location.google_maps" rows="5"
                                    description="Please paste embed code from Google Maps." />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <x-form.text-input wire:model="location.lat" name="location.lat" label="Latitude" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="location.lng" name="location.lng" label="Longitude" />
                            </div>

                            <div class="col-span-6">
                                <x-form.textarea wire:model="location.public_transportation"
                                    label="Public Transportation" name="location.public_transportation" rows="4"
                                    description="Add tram and/or bus stops close to this location." />
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>