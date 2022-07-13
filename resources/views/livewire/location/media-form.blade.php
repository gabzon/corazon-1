<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Media</h3>
                <p class="mt-1 text-sm text-gray-600">Add all multimedia content.</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.media-library wire:model="logo" name="logo" :model="$location"
                                    collection="location-logo" label="Logo" desc="Ratio 4:3 (1280×960)" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.media-library wire:model="icon" name="icon" :model="$location"
                                    collection="location-icon" label="Icon" desc="Ratio 1:1 (1080×1080)" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.media-library name="facade" :model="$location" collection="location-facade"
                                    label="Facade" desc="Ratio 4:3 (1280×960)" />
                            </div>
                        </div>

                        <div>
                            <x-shared.display-embed :embed="$location->video" />
                            <x-form.textarea wire:model="location.video" label="Video" name="location.video" rows="3"
                                description="Embed promo video from Youtube/Facebook/Instagram" />
                        </div>

                        <div>
                            <div class="w-full">
                                <label for="Contract" class="block text-sm font-medium text-gray-700 mb-1">
                                    Contract
                                </label>
                                <div x-data="{changeThumb:false}">
                                    @if ($location->getMedia('location-contracts')->last() != null)
                                    <div x-show="!changeThumb">
                                        <a href="{{ $location->getMedia('location-contracts')->last()->getUrl() }}"
                                            download="true"
                                            class="block text-sm truncate text-gray-500 hover:text-indigo-600">
                                            {{ $location->getMedia('location-contracts')->last()->getUrl() }}
                                        </a>

                                        <button type="button" @click="changeThumb=true"
                                            class="text-sm text-indigo-700 hover:text-indigo-500">Change</button>
                                    </div>
                                    <div class="mt-1" x-show="changeThumb">
                                        <x-media-library-attachment name="contract" rules="mimes:pdf" />
                                        <button type="button" @click="changeThumb=false"
                                            class="text-sm text-indigo-700 hover:text-indigo-500">Cancel</button>
                                    </div>
                                    @else
                                    <x-media-library-attachment name="contract" rules=" mimes:pdf" />
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mt-1 w-full">
                                {{--
                                <x-media-library-attachment name="photos" multiple /> --}}
                                <x-form.media-library-multiple name="photos" :model="$location"
                                    collection="location-photos" label="Photos" />
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
    <div class="my-10">&nbsp;</div>
</div>