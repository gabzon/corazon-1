<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Options</h3>
                <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <fieldset>
                            <legend class="text-base font-medium text-gray-900" aria-hidden="true">Facilities</legend>
                            <div class="mt-4 space-y-4">
                                <x-form.checkbox wire:model="location.has_sink" name="location.has_sink"
                                    label="Has Sink?" />

                                <x-form.checkbox wire:model="location.has_bar" name="location.has_bar"
                                    label="Has Bar?" />

                                <x-form.checkbox wire:model="location.has_fridge" name="location.has_fridge"
                                    label="Has Fridge?" />

                                <x-form.checkbox wire:model="location.has_hall" name="location.has_hall"
                                    label="Has entry hall?" />

                                <x-form.checkbox wire:model="location.has_changeroom" name="location.has_changeroom"
                                    label="Has changeroom?" />

                                <x-form.checkbox wire:model="location.has_lockers" name="location.has_lockers"
                                    label="Has lockers?" />

                                <div x-data="{wc: @entangle('location.has_wc')}" class="grid grid-cols-2 gap-6">
                                    <x-form.checkbox wire:model="location.has_wc" name="location.has_wc"
                                        label="Has Toilets?" />
                                    <div x-show="wc">
                                        <x-form.checkbox wire:model="location.has_separate_wc"
                                            name="location.has_separate_wc" label="Has separated toilets?" />
                                    </div>
                                </div>

                                <x-form.checkbox wire:model="location.has_shower" name="location.has_shower"
                                    label="Has showers?" />

                                <x-form.checkbox name="location.has_parking_bike" label="Has parking for bikes?" />

                                <div x-data="{parking: @entangle('location.has_parking')}"
                                    class="grid grid-cols-2 gap-6">
                                    <div>
                                        <x-form.checkbox wire:model="location.has_parking" name="location.has_parking"
                                            label="Has parking?" />
                                    </div>
                                    <div x-show="parking">
                                        <x-form.select wire:model="location.parking" name="location.parking" :options="[ 
                                            'public parking'  => __('Public Parking'),
                                            'school parking'  => __('School parking'), 
                                            'private parking' => __('Private parking'), 
                                            'other'         => __('Other')]" label="Type" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>