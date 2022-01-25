<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Address Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.country-select wire:model="user.country" name="user.country" label="Country" />
                            </div>

                            <div class="col-span-6">
                                <x-form.text-input wire:model="user.address" name="user.address" label="Address" />
                            </div>

                            <div class="col-span-6">
                                <x-form.text-input wire:model="user.address_info" name="user.address_info"
                                    label="Address extra" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <x-form.text-input wire:model="user.city" name="user.city" label="City" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="user.state" name="user.state" label="State /
                                    Province" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="user.zip" name="user.zip" label="ZIP /
                                    Postal code" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-form.submit />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>