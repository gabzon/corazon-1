<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Options</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This sections lets you add additional information to your event so it can become more attractive
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.select wire:model="event.public" name="event.public"
                                    :options="['everyone', 'women', 'men', 'kids', 'teenagers']" label="Public" />
                            </div>
                        </div>

                        <x-form.rich-text name="event.description" description="Detailed description of the event." />

                        <x-form.text-input wire:model="event.tagline" name="event.tagline" label="Tagline" />

                        <x-form.text-input wire:model="event.registration_url" name="event.registration_url"
                            label="Registration URL" />


                        <div class="w-full">
                            <div class="mt-5 relative flex items-start">
                                <x-form.select :options="['pre-registered','standby','waiting', 'registered']"
                                    wire:model="event.default_registration_status"
                                    name="event.default_registration_status" label="Default Registration Status" />
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="mt-5 relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="is_private" wire:model="event.is_private" name="is_private"
                                        type="checkbox"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="is_private" class="font-medium text-gray-700">Private</label>
                                    <span id="is_private-description" class="text-gray-500">
                                        Only invited users will be able to see this course.
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="mt-5 relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="is_recurrent" wire:model="event.is_recurrent" name="is_recurrent"
                                        type="checkbox"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="is_recurrent" class="font-medium text-gray-700">Is recurrent</label>
                                    <span id="is_recurrent-description" class="text-gray-500">
                                        Check if this event repeats monthly or weekly
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-partials.saved-confirmation />
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>