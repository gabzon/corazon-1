<div>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Social Media Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Share your social media information
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="save" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <x-form.text-input wire:model="user.facebook" name="user.facebook"
                                        label="Facebook" />
                                </div>

                                <div class="col-span-6">
                                    <x-form.text-input wire:model="user.instagram" name="user.instagram"
                                        label="Instagram" />
                                </div>

                                <div class="col-span-6">
                                    <x-form.text-input wire:model="user.youtube" name="user.youtube" label="Youtube" />
                                </div>

                                <div class="col-span-6">
                                    <x-form.text-input wire:model="user.tiktok" name="user.tiktok" label="tiktok" />
                                </div>

                                <div class="col-span-6">
                                    <x-form.text-input wire:model="user.twitter" name="user.twitter" label="twitter" />
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
</div>