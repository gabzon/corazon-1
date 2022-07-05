<div class="w-full">
    <label for="images" class="block text-sm font-medium text-gray-700 mb-1">
        {{ $label }}
    </label>
    <div x-data="{changeThumb:false}">
        @if (isset($model))
        <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @forelse ($model->getMedia($collection) as $img)
            <li class="relative">
                <div
                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                    <img src="{{ $img->getFullUrl() }}" alt=""
                        class="object-cover pointer-events-none group-hover:opacity-75">
                </div>
                <button type="button" x-on:click="$wire.removeImage({{$loop->index}})"
                    class="block ml-2 text-sm font-medium text-gray-500 hover:text-red-600 truncate">remove
                </button>
            </li>
            @empty
            <li class="col-span-4">
                <x-media-library-attachment multiple name="{{ $name }}" rules="mimes:jpeg,png,gif" />
            </li>
            @endforelse
        </ul>
        <div class="mt-3" x-data="{show:false}">
            <button x-show="!show" class="text-sm font-medium text-indigo-700 hover:text-indigo-500 truncate"
                @click="show=true" type="button">Add images <span aria-hidden="true"> &rarr;</span></button>
            <div x-show="show">
                <x-media-library-attachment multiple name="{{ $name }}" rules="mimes:jpeg,png,gif" />
            </div>
            <button x-show="show" class="text-sm font-medium text-gray-700 hover:text-gray-500 truncate"
                @click="show=false" type="button">Cancel</button>
        </div>
        @endif
    </div>
</div>