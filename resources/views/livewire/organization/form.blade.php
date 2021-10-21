<div>
    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200" method="POST">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        General information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="organization.name" name="organization.name" label="Name" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.slug-input wire:model="organization.slug" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="organization.shortname" name="organization.shortname"
                            label="Shortname" />
                    </div>


                    <div class="sm:col-span-6">
                        <x-form.textarea wire:model="organization.about" label="About" name="organization.about"
                            rows="4" description="Write a few sentences about the organization." />
                    </div>

                    <div class="sm:col-span-6">
                        @if ($organization->video)
                        {!! $organization->video !!}
                        @endif
                        <x-form.textarea wire:model="organization.video" label="Promo Video" name="organization.video"
                            rows="3" description="Paste embed code from Youtube/Facebook/Vimeo." />
                    </div>

                    <div class="sm:col-span-6">
                        <label for="logo" class="block text-sm font-medium text-gray-700">
                            Logo
                        </label>

                        <x-media-library-attachment name="logo" rules="mimes:jpeg,png,gif" />

                    </div>

                    <div class="sm:col-span-6">
                        <label for="icon" class="block text-sm font-medium text-gray-700">
                            Icon
                        </label>

                        <x-media-library-attachment name="icon" rules="mimes:jpeg,png,gif" />

                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="organization.oid" name="organization.oid"
                            label="Organization ID" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.select wire:model="organization.status" name="organization.status"
                            :options="['Active', 'Inactive', 'Standby', 'Pending', 'Closed']" label="Status" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.select wire:model="organization.type" name="organization.type"
                            :options="['School', 'Business', 'Organizer', 'Partner', 'Association']" label="Type" />
                    </div>
                </div>
            </div>

            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Contact Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <x-form.text-input wire:model="organization.contact" name="organization.contact"
                            label="Contact" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form.text-input wire:model="organization.phone" name="organization.phone" label="Phone" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form.text-input wire:model="organization.email" name="organization.email"
                            label="Email address" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form.text-input wire:model="organization.website" name="organization.website"
                            label="Website" />
                    </div>

                    <div class="sm:col-span-5">
                        <x-form.text-input wire:model="organization.address" name="organization.address"
                            label="Street Address" />
                    </div>

                    <div class="sm:col-span-1">
                        <x-form.text-input wire:model="organization.zip" name="organization.zip" label="Zip code" />
                    </div>

                    <div class="sm:col-span-5">
                        <x-form.text-input wire:model="organization.address_info" name="organization.address_info"
                            label="Address info" />
                    </div>

                    <div class="sm:col-span-1">
                        <x-form.city-select wire:model="organization.city_id" name="organization.city_id" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="organization.lat" name="organization.lat" label="Latitude" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.text-input wire:model="organization.lng" name="organization.lng" label="Longitude" />
                    </div>

                </div>
            </div>

            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Social Media Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form.text-input wire:model="organization.facebook" name="organization.facebook"
                            label="Facebook" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form.text-input wire:model="organization.instagram" name="organization.instagram"
                            label="Instagram" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form.text-input wire:model="organization.youtube" name="organization.youtube"
                            label="Youtube" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form.text-input wire:model="organization.tiktok" name="organization.tiktok" label="Tiktok" />
                    </div>

                    <div class="sm:col-span-4">
                        <x-form.text-input wire:model="organization.twitter" name="organization.twitter"
                            label="Twitter" />
                    </div>
                </div>
            </div>

            @if ($organization->type == 'school')
            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Pricing Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Add school pricing system table
                    </p>
                </div>
                <livewire:shared.price-form :model="$organization" modelName="Organization" />
            </div>
            @endif
        </div>

        <div class="pt-6">
            <div class="flex justify-end">
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>