<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">General information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This information will be displayed publicly so be careful what you share.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div>
                            <x-form.textarea wire:model="organization.about" label="About" name="organization.about"
                                rows="4" description="Write a few sentences about the organization." />
                        </div>

                        <div>
                            @if ($organization->video)
                            {!! $organization->video !!}
                            @endif
                            <x-form.textarea wire:model="organization.video" label="Promo Video"
                                name="organization.video" rows="3"
                                description="Paste embed code from Youtube/Facebook/Vimeo." />
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.media-library name="logo" :model="$organization" collection="organization-logos"
                                    label="Logo" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.media-library name="icon" :model="$organization" collection="organization-icons"
                                    label="Icon" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="flex justify-between items-center">
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