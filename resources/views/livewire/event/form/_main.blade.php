<div>
    <div class="space-y-6">
        <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
            <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                General
            </h3>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-full sm:w-4/5 px-3">
                <x-form.text-input wire:model="event.name" name="event.name" label="Name" />
            </div>
            <div class="w-full sm:w-1/5 px-3">
                @if (auth()->user()->facebook_token)
                <div class="mt-8">
                    <a href="#social-media" class="text-sm text-gray-500 underline">Facebook Import</a>
                </div>
                @endif
            </div>
        </div>
        <div>
            <x-form.slug-input wire:model="event.slug" />
        </div>

        <div>
            <x-form.text-input wire:model="event.tagline" name="event.tagline" label="Tagline" />
        </div>

        <x-form.rich-text name="event.description" description="Detailed description of the event." />

        <x-form.textarea wire:model="event.video" label="Promo Video" name="video" rows="4"
            description="Please paste embed code from Youtube/Facebook/Vimeo." />
        <br>

        <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
            <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                Schedule
            </h3>
        </div>

        <div class="flex flex-wrap -mx-3">
            <div class="w-full sm:w-1/4 px-3">
                <x-form.date-input wire:model="event.start_date" name="event.start_date" label="Start date" />
            </div>
            <div class="w-full sm:w-1/4 px-3">
                <x-form.date-input wire:model="event.end_date" name="event.end_date" label="End date" />
            </div>
            <div class="w-full sm:w-1/4 px-3">
                <x-form.time-input wire:model="event.start_time" name="start_time" label="Start time" />
            </div>
            <div class="w-full sm:w-1/4 px-3">
                <x-form.time-input wire:model="event.end_time" name="end_time" label="End time" />
            </div>
        </div>

        <br>

        <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
            <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                Contact Information
            </h3>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-5 sm:col-span-1">
                <x-form.text-input wire:model="event.contact" name="event.contact" label="Contact" />
            </div>
            <div class="col-span-5 sm:col-span-1">
                <x-form.text-input wire:model="event.email" name="event.email" label="Email" />
            </div>
            <div class="col-span-5 sm:col-span-1">
                <x-form.text-input wire:model="event.phone" name="event.phone" label="Phone" />
            </div>
        </div>

        <br>

        <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
            <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                Pricing
            </h3>
        </div>

        <livewire:shared.price-form />

        <br>

        <div id="social-media" class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
            <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                Social Media
            </h3>
        </div>

        <div class="grid grid-cols-2 gap-5">
            <x-form.text-input wire:model="event.website" name="event.website" label="Website" />
            <x-form.text-input wire:model="event.twitter" name="event.twitter" label="Twitter" />
            <x-form.text-input wire:model="event.facebook" name="event.facebook" label="Facebook" />
            <x-form.text-input wire:model="event.youtube" name="event.youtube" label="Youtube" />
            <x-form.text-input wire:model="event.instagram" name="event.instagram" label="Instagram" />
            <x-form.text-input wire:model="event.tiktok" name="event.tiktok" label="Tiktok" />
        </div>
        <br>

        @if (auth()->user()->facebook_token)
        <div id="facebook" class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
            <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                Facebook Import
            </h3>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-8">
            <div class="sm:col-span-2">
                <x-form.text-input wire:model="event.facebook_id" name="event.facebook_id" label="Facebook Event ID" />
            </div>
            <div class="sm:col-span-1">
                <br>
                <button type="button" wire:click="import"
                    class="w-full items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ $action == 'store' ? 'Import' : 'Update'}}
                </button>
            </div>
        </div>
        <div>
            @dump($fbResults)
        </div>
        @endif
        <br>
        <br>
    </div>
</div>