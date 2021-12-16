<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Default Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Main information about this organization.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-1 items-center">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.city-select wire:model="organization.city_id" name="organization.city_id" />
                            </div>
                            <div class="col-span-6 sm:col-span-3 sm:pt-5">
                                <a href="{{ route('city.create') }}"
                                    class="text-sm text-indigo-500 hover:text-indigo-800 ml-2">
                                    or add new city <span aria-hidden="true">&rarr;</span></a>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <x-form.text-input wire:model="organization.name" name="organization.name"
                                    label="Name" />
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <x-form.slug-input wire:model="organization.slug" />
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <x-form.text-input wire:model="organization.shortname" name="organization.shortname"
                                    label="Shortname" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.select wire:model="organization.status" name="organization.status"
                                    :options="['active', 'inactive', 'standby', 'open', 'closed']" label="Status" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.select wire:model="organization.type" name="organization.type"
                                    :options="['School', 'Business', 'Organizer', 'Partner', 'Association']"
                                    label="Type" />
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.text-input wire:model="organization.contact" name="organization.contact"
                                    label="Contact" />
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.text-input wire:model="organization.phone" name="organization.phone"
                                    label="Phone" />
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.text-input wire:model="organization.oid" name="organization.oid"
                                    label="Organization ID" />
                            </div>

                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.text-input wire:model="organization.email" name="organization.email"
                                    label="Email address" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.text-input wire:model="organization.website" name="organization.website"
                                    label="Website" />
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