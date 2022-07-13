<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">General</h3>
                <p class="mt-1 text-sm text-gray-600">Write down the default information about a place</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2 col-end-3">
                                <x-form.city-select wire:model="location.city_id" name="location.city_id" />
                            </div>
                            <div class="col-start-1 col-span-3 sm:col-span-2">
                                <x-form.text-input wire:model="location.name" name="location.name" label="Name" />
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.text-input wire:model="location.shortname" name="location.shortname"
                                    label="Shortname" />
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <x-form.slug-input wire:model="location.slug" name="location.slug" label="Slug" />
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
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
                                    'public place'  => __('Public place'),                                    
                                    'event hall'    => __('Event Hall'),
                                    'other'         => __('Other')]" label="Type" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="location.facebook_id" name="location.facebook_id"
                                    label="Facebook ID" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="location.google_id" name="location.google_id"
                                    label="Google ID" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <x-partials.saved-confirmation />
                            </div>
                            <div>
                                <button type="button" wire:click="destroy({{$location}})"
                                    onclick="confirm('Are you sure you want to delete this location?') || event.stopImmediatePropagation()"
                                    class="bg-white py-1.5 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Delete
                                </button>
                                <x-jet-button>
                                    {{ __('Save') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>