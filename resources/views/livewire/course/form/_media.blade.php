<div class="space-y-4">
    <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mt-12 mb-4">
        <h3 id="media" class="text-lg leading-6 font-medium text-gray-900">
            Media
        </h3>
    </div>

    <x-form.textarea wire:model="course.video1" label="First Video" name="video1" rows="4"
        description="Please paste embed code from Youtube/Facebook/Vimeo." />

    <div
        x-data="{ video2: {{ empty($teaser_video_2) ? 'false':'true' }}, video3: {{ empty($teaser_video_3) ? 'false':'true' }} }">
        <div class="group flex items-center" x-show="!video2">
            <button type="button" @click="video2=true"
                class="border border-dashed border-2 p-1 border-gray-400 rounded-full group-hover:bg-indigo-600 group-hover:border-indigo-600 group-hover:text-white">
                @include('icons.plus')
            </button>
            <button type="button" @click="video2=true" class="ml-2 text-sm text-gray-500 group-hover:text-indigo-600">
                Add another video
            </button>
        </div>


        <div class="mt-3" x-show="video2">
            <x-form.textarea wire:model="course.video2" label="Second Video" name="video2" rows="4"
                description="Please paste embed code from Youtube/Facebook/Vimeo." />
        </div>

        <div x-show="video2">
            <div class="group flex items-center mt-4" x-show="!video3">
                <button type="button" @click="video3=true"
                    class="border-dashed border-2 p-1 border-gray-400 rounded-full group-hover:bg-indigo-600 group-hover:border-indigo-600 group-hover:text-white">
                    @include('icons.plus')
                </button>
                <button type="button" @click="video3=true"
                    class="ml-2 text-sm text-gray-500 group-hover:text-indigo-600">
                    Add another video
                </button>
            </div>
        </div>


        <div class="mt-3" x-show="video3">
            <x-form.textarea wire:model="course.video3" label="Third Video" name="video3" rows="4"
                description="Please paste embed code from Youtube/Facebook/Vimeo." />
        </div>
    </div>

</div>