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
                        <x-form.text-input wire:model="model.website" name="model.website" label="Website" />
                        <x-form.text-input wire:model="model.facebook" name="model.facebook" label="Facebook" />
                        <x-form.text-input wire:model="model.instagram" name="model.instagram" label="Instagram" />
                        <x-form.text-input wire:model="model.youtube" name="model.youtube" label="Youtube" />
                        <x-form.text-input wire:model="model.tiktok" name="model.tiktok" label="Tiktok" />
                        <x-form.text-input wire:model="model.twitter" name="model.twitter" label="Twitter" />
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
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