<div>
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Videos</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Add promo videos to your course
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="save" method="POST">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <x-form.textarea wire:model="course.video1" label="First Video" name="video1" rows="4"
                                description="Please paste embed code from Youtube/Facebook/Vimeo." />

                            <div
                                x-data="{ video2: {{ empty($teaser_video_2) ? 'false':'true' }}, video3: {{ empty($teaser_video_3) ? 'false':'true' }} }">
                                <div class="group flex items-center" x-show="!video2">
                                    <button type="button" @click="video2=true"
                                        class="border border-dashed border-2 p-1 border-gray-400 rounded-full group-hover:bg-indigo-600 group-hover:border-indigo-600 group-hover:text-white">
                                        @include('icons.plus')
                                    </button>
                                    <button type="button" @click="video2=true"
                                        class="ml-2 text-sm text-gray-500 group-hover:text-indigo-600">
                                        Add another video
                                    </button>
                                </div>


                                <div class="mt-3" x-show="video2">
                                    <x-form.textarea wire:model="course.video2" label="Second Video" name="video2"
                                        rows="4" description="Please paste embed code from Youtube/Facebook/Vimeo." />
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
                                    <x-form.textarea wire:model="course.video3" label="Third Video" name="video3"
                                        rows="4" description="Please paste embed code from Youtube/Facebook/Vimeo." />
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
</div>