<div>
    <x-slot name="css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"
            integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA=="
            crossorigin="anonymous" />
    </x-slot>

    <form wire:submit.prevent="save">
        <header class="relative bg-white shadow z-10">
            <div class="max-w-full mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            {{ $action == 'store' ? __('Add Post') : __('Edit Post') }}
                        </h2>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4">
                        <a href="{{ url()->previous() }}"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Back
                        </a>
                        <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="grid grid-cols-12">
            <div class="col-span-12 sm:col-span-9">
                <div class="p-3 sm:p-4 md:p-6 lg:p-8 space-y-6">
                    <div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.text-input wire:model="post.title" name="post.title" label="Title" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.slug-input wire:model.lazy="post.slug" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <x-form.rich-text name="post.content" />
                    </div>
                    <div>
                        <x-form.textarea wire:model="post.video" name="Video"
                            description="Please paste embed code here from youtube/facebook/vimeo." />
                    </div>

                </div>

            </div>
            <div class="col-span-12 sm:col-span-3 bg-white">
                <div class="px-3 sm:p-4 md:p-6 lg:p-8 space-y-6">
                    <livewire:component.thumbnail image="{{ $post->thumbnail }}" />
                    <x-form.select wire:model="post.status" name="post.status" :options="['Publish', 'Draft', 'Review']"
                        label="Status" />
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js"
        integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg=="
        crossorigin="anonymous"></script>
    @endpush
</div>