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
                                <x-form.submit />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>