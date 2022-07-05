<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Media</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Add all your promotional material images or embed videos
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-6 gap-6">
                            <div class=" col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.media-library name="cover" :model="$model" collection="{{ $coverCollection }}"
                                    label="Cover image" desc="Ratio 4:3 (1280×960)" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.media-library name="square" :model="$model" collection="{{ $squareCollection }}"
                                    label="Square image" desc="Ratio 1:1 (1080x1080)" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.media-library name="portrait" :model="$model"
                                    collection="{{ $portraitCollection }}" label="Portrait image"
                                    desc="Ratio 9:16 (1080x1920)" />
                            </div>
                        </div>

                        <x-form.textarea wire:model="video1" label="Promo Video" name="video1" rows="4"
                            description="Please paste embed code from Youtube/Facebook/Vimeo." />
                        @if (class_basename($model) == 'Course')
                        <x-form.textarea wire:model="video2" label="Promo video 2" name="video2" rows="4"
                            description="Please paste embed code from Youtube/Facebook/Vimeo." />

                        <x-form.textarea wire:model="video3" label="Promo video 3" name="video3" rows="4"
                            description="Please paste embed code from Youtube/Facebook/Vimeo." />
                        @endif

                        {{--
                        <x-form.media-library-multiple name="gallery" :model="$model"
                            collection="{{ $galleryCollection }}" label="Gallery" /> --}}
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>