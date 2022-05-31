<form wire:submit.prevent="save" class="space-y-8 divide-y">
    <div class="space-y-8">
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-5">
            <div class="sm:col-span-2">
                <x-form.text-input wire:model="location.name" name="location.name" label="Name" />
            </div>

            <div class="sm:col-span-2">
                <x-form.slug-input wire:model="location.slug" />
            </div>

            <div class="sm:col-span-1">
                <x-form.text-input wire:model="location.shortname" name="location.shortname" label="Shortname" />
            </div>
        </div>

        <div class="">
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-2">
                    <x-form.text-input wire:model="location.contact" name="location.contact" label="Contact" />
                </div>

                <div class="sm:col-span-2">
                    <x-form.text-input wire:model="location.phone" name="location.phone" label="Phone" />
                </div>

                <div class="sm:col-span-2">
                    <x-form.text-input wire:model="location.email" name="location.email" label="Email address" />
                </div>

                <div class="sm:col-span-6">
                    <x-form.textarea wire:model="location.comments" label="comments" name="location.comments" rows="4"
                        description="Write a few sentences about the location." />
                </div>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-10">
                <div class="sm:col-span-4">
                    <x-form.text-input wire:model="location.website" name="location.website" label="Website" />
                </div>
                <div class="sm:col-span-2">
                    <x-form.select wire:model="location.type" name="location.type" :options="[ 
                                    'dance studio'  => __('Dance studio'),
                                    'theater'       => __('Theater'), 
                                    'hotel'         => __('Hotel'), 
                                    'nightclub'     => __('Nightclub'), 
                                    'bar'           => __('Bar'),
                                    'restaurant'    => __('Restaurant'), 
                                    'fitness'       => __('Fitness'), 
                                    'school'        => __('School'), 
                                    'sport center'  => __('Sport center'),
                                    'other'         => __('Other'),
                                    'event-hall'    => __('Event Hall')]" label="Type" />
                </div>

                <div class="sm:col-span-2">
                    <x-form.city-select wire:model="location.city_id" name="location.city_id" />
                </div>

                <div class="sm:col-span-2">
                    <x-form.text-input wire:model="location.facebook_id" name="location.facebook_id"
                        label="Facebook ID" />
                </div>


                <div class="sm:col-span-6">
                    <label for="contract" class="block text-sm font-medium text-gray-700">
                        Contract
                    </label>
                    <div class="mt-1 w-full">
                        <x-media-library-attachment name="contract" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="flex justify-end items-center">
            <x-partials.saved-confirmation />
            <button type="button" wire:click="destroy({{$location}})"
                onclick="confirm('Are you sure you want to delete this location?') || event.stopImmediatePropagation()"
                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Delete
            </button>
            <button type="submit"
                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </div>
</form>