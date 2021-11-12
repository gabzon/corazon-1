<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Social media Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Please add the URL link of the social media events
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <x-form.text-input wire:model="event.website" name="event.website" label="Website" />
                        <x-form.text-input wire:model="event.facebook" name="event.facebook" label="Facebook" />
                        <x-form.text-input wire:model="event.instagram" name="event.instagram" label="Instagram" />
                        <x-form.text-input wire:model="event.youtube" name="event.youtube" label="Youtube" />
                        <x-form.text-input wire:model="event.tiktok" name="event.tiktok" label="Tiktok" />
                        <x-form.text-input wire:model="event.twitter" name="event.twitter" label="Twitter" />
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