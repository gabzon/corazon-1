<div>
    <form wire:submit.prevent="{{ $action }}" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 px-4 sm:px-2 md:px-0">
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="name" wire:model="name"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="slug" class="block text-sm font-medium text-gray-700">
                        Slug
                    </label>
                    <div class="mt-1">
                        <input type="text" name="slug" id="slug" wire:model="slug" disabled
                            class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>


                <div class="sm:col-span-4">
                    <label for="music" class="block text-sm font-medium text-gray-700">
                        Music Genres
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="music" id="music" wire:model="music"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="family" class="block text-sm font-medium text-gray-700">
                        Family
                    </label>
                    <div class="mt-1">
                        <select id="family" name="family" wire:model="family"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            <option value="" default selected disabled>Select family</option>
                            <option>Street / Urban</option>
                            <option>Cuban Salsa</option>
                            <option>Line Salsa</option>
                            <option>Bachata</option>
                            <option>Kizomba</option>
                            <option>Ballroom</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4 px-4 sm:px-2 md:px-0">
                <div class="sm:col-span-1">
                    <label for="icon" class="block text-sm font-medium text-gray-700">
                        Icon
                    </label>
                    <div class="mt-1">
                        <input type="text" name="icon" id="icon" autocomplete="icon" wire:model="icon"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-1">
                    <label for="color" class="block text-sm font-medium text-gray-700">
                        Color
                    </label>
                    <div class="mt-1">
                        <input type="text" name="color" id="color" autocomplete="color" wire:model="color"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-1">
                    <label for="origin" class="block text-sm font-medium text-gray-700">
                        Origin
                    </label>
                    <div class="mt-1">
                        <input type="text" name="origin" id="origin" autocomplete="origin" wire:model="origin"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-1">
                    <label for="year" class="block text-sm font-medium text-gray-700">
                        Year
                    </label>
                    <div class="mt-1">
                        <input type="text" name="year" id="year" wire:model="year"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 px-4 sm:px-2 md:px-0">
                <div class="sm:col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">
                        Description
                    </label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="3" wire:model="description"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
                </div>

                <div class="sm:col-span-6">
                    @if ($video)
                    {!! $video !!}
                    @endif
                    <label for="video" class="block text-sm font-medium text-gray-700">
                        Video
                    </label>
                    <div class="mt-1">
                        <textarea id="video" name="video" rows="3" wire:model="video"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
                </div>

                <div class="sm:col-span-6">
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700">
                        Thumbnail
                    </label>

                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            @if ($action == 'update')
                            @isset($thumbnail)
                            <img src="{{ asset($thumbnail) }}" class="mb-2">
                            @endisset
                            @else
                            @if ($thumbnail)
                            <img src="{{ asset($thumbnail) }}" class="mb-2">
                            @endif
                            @endif
                            {{$thumbnail}}
                            @if (!isset($thumbnail))
                            @include('icons.add-photo', ['style'=>'mx-auto h-12 w-12 text-gray-400'])
                            @endif

                            <div class="flex justify-center text-sm text-gray-600">
                                <label for="thumbnail"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 px-2">
                                    <span>Upload a file</span>
                                    <input id="thumbnail" name="thumbnail" type="file" class="sr-only"
                                        wire:model="thumbnail">
                                </label>
                                {{-- <p class="pl-1">or drag and drop</p> --}}
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 1MB
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <a href="{{ url()->previous() }}"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </a>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>