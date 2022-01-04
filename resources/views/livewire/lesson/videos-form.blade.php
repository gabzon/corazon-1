<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Videos</h3>
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
                            <ul role="list" class="divide-y divide-gray-200">
                                @forelse ($videosList as $v)
                                <li class="py-4 flex justify-between items-center">
                                    <div class="flex">

                                        <img src="https://img.youtube.com/vi/{{ $v->youtube_id_from_embed }}/0.jpg"
                                            alt="" class="w-20 h-16 object-center object-cover rounded-lg">
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">{{ $v->title}}</p>
                                            <p class="text-sm text-gray-500">{{ $v->description }}</p>
                                            <p class="text-sm text-gray-500">
                                                {{-- Published on {{ $v->pivot->created_at->format('M d, Y') }} --}}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" wire:click="edit({{ $v->id }})"
                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                            Edit
                                        </button>
                                    </div>
                                </li>
                                @empty
                                <li class="py-4 flex">
                                    <img class="h-16 w-16 bg-indigo-300 rounded-lg" src="" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">No videos found</p>
                                        <p class="text-sm text-gray-500">Please upload a video</p>
                                    </div>
                                </li>
                                @endforelse
                            </ul>
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-3">
                                <x-form.text-input wire:model="video.title" name="video.title" label="Title" />
                            </div>
                            <div class="col-span-3 sm:col-span-3">
                                <x-form.text-input wire:model="video.url" name="video.url" label="URL" />
                            </div>
                        </div>
                        <div>
                            @if ($video->embed)
                            <div class="mb-3">
                                <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                                    {!! $video->embed !!}
                                </div>
                            </div>
                            @endif

                            <x-form.textarea wire:model="video.embed" label="Video" name="embed" rows="2"
                                description="Please paste embed code from Youtube/Facebook/Vimeo." />
                        </div>
                        <div>
                            <x-form.textarea wire:model="video.description" label="Description" name="description"
                                rows="2" description="Please write a brief description of the video if any" />
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
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