<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Address Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Legal organization address
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-7 gap-6">
                            <div class="col-span-7 sm:col-span-5">
                                <x-form.text-input wire:model="organization.address" name="organization.address"
                                    label="Street Address" />
                            </div>
                            <div class="col-span-7 sm:col-span-6 lg:col-span-2">
                                <x-form.text-input wire:model="organization.zip" name="organization.zip"
                                    label="Zip code" />
                            </div>
                            <div class="col-span-7 sm:col-span-3">
                                <x-form.text-input wire:model="organization.address_info"
                                    name="organization.address_info" label="Address info" />
                            </div>

                            <div class="col-span-7 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="organization.lat" name="organization.lat"
                                    label="Latitude" />
                            </div>

                            <div class="col-span-7 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="organization.lng" name="organization.lng"
                                    label="Longitude" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="flex justify-between items-center">
                            <x-partials.saved-confirmation />
                            <x-jet-button>
                                {{ __('Save') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>