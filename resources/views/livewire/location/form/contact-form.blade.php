<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Contact Information</h3>
                <p class="mt-1 text-sm text-gray-600">Write down all information about the contact</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="location.contact" name="location.contact"
                                    label="Contact name" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="location.phone" name="location.phone" label="Phone" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-form.email-input wire:model="location.email" name="location.email"
                                    label="Email address" />
                            </div>

                            <div class="col-span-6">
                                <x-form.textarea wire:model="location.comments" label="Comments"
                                    name="location.comments" rows="3"
                                    description="Write a brief description about this place." />
                            </div>

                            <div class="col-span-6">
                                <x-form.text-input wire:model="location.website" name="location.website"
                                    label="Website" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- <form class="space-y-8 divide-y">
    <div class="space-y-8">

        <div class="">
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
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
</form> --}}