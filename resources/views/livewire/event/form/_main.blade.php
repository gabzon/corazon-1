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
                    {{-- <span @click="import = true" class="text-sm text-gray-500 underline">
                        Facebook Import
                    </span> --}}
                </div>
                @endif
            </div>
        </div>



        @if (auth()->user()->facebook_token)
        <br>
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
        <div class="my-5">
            @dump($fbResults)
        </div>
        @endif


        <div>
            <x-form.slug-input wire:model="event.slug" />
        </div>

        <div>
            <x-form.text-input wire:model="event.tagline" name="event.tagline" label="Tagline" />
        </div>

        <x-form.rich-text name="event.description" description="Detailed description of the event." />

        <x-form.textarea wire:model="event.video" label="Promo Video" name="video" rows="4"
            description="Please paste embed code from Youtube/Facebook/Vimeo." />

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="event.is_online" id="is_online" aria-describedby="candidates-description"
                    name="is_online" type="checkbox"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
            </div>
            <div class="ml-3 text-sm">
                <label for="candidates" class="font-medium text-gray-700">Online</label>
                <span id="candidates-description" class="text-gray-500">
                    Check this box if the event is online
                </span>
            </div>
        </div>

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

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="event.is_recurrent" id="is_recurrent" aria-describedby="recurrent-event"
                    name="is_recurrent" type="checkbox"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
            </div>
            <div class="ml-3 text-sm">
                <label for="is_recurrent" class="font-medium text-gray-700">Recurrent</label>
                <span id="candidates-description" class="text-gray-500">
                    Check this box if the event will happen frequently
                </span>
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
    </div>
</div>