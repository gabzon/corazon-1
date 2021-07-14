<div>
    <label for="thumbnail" class="block text-sm font-medium text-gray-700">
        Thumbnail
    </label>
    <div>
        @if($thumbnail)
        <div>
            <img src="{{ $thumbnail->temporaryUrl() }}" class="block max-h-72 w-full object-cover">
        </div>
        <div class="flex justify-between items-center">
            <label for="thumbnail"
                class="relative cursor-pointer rounded-md font-normal text-sm text-indigo-700 hover:text-indigo-500 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 mr-1">
                <span>Change</span>
                <input id="thumbnail" name="thumbnail" type="file" class="sr-only" wire:model="thumbnail">
            </label>
            <span></span>
            <button wire:click.prevent="remove"
                class="text-indigo-700 hover:text-indigo-500 hover:underline text-sm font-normal ml-1">Remove</button>
        </div>
        @else
        <div>
            @if ($tmp)
            <div class="bg-gray-200">
                <img src="{{ $tmp }}" class="block max-h-72 w-full object-cover">
            </div>

            {{-- <button wire:click.prevent="remove"
                class="text-indigo-500 text-sm hover:text-indigo-700 hover:underline">remove</button> --}}
            <div class="flex justify-between items-center">
                <label for="thumbnail"
                    class="relative cursor-pointer rounded-md font-normal text-sm text-indigo-700 hover:text-indigo-500 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 mr-1">
                    <span>Change</span>
                    <input id="thumbnail" name="thumbnail" type="file" class="sr-only" wire:model="thumbnail">
                </label>
                <span></span>
                <button wire:click.prevent="remove"
                    class="text-indigo-700 hover:text-indigo-500 hover:underline text-sm font-normal ml-1">Remove</button>
            </div>

            @else
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                    @if (!isset($thumbnail))
                    @include('icons.add-photo', ['style'=>'mx-auto h-12 w-12 text-gray-400'])
                    @endif
                    <div class="flex justify-center text-sm text-gray-600">
                        <label for="thumbnail"
                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 px-2">
                            <span>Upload a file</span>
                            <input id="thumbnail" name="thumbnail" type="file" class="sr-only" wire:model="thumbnail">
                        </label>
                        {{-- <p class="pl-1">or drag and drop</p> --}}
                    </div>
                    <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 1MB
                    </p>
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>

    {{-- {{$thumbnail}} --}}
    @error('thumbnail') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
</div>





{{-- <div class="">
    @if ($thumbnail)
    <img src="{{ $thumbnail->temporaryUrl() }}" class="block mb-3 h-60">
<input type="file" class="block" name="thumbnail" wire:model="thumbnail">
@else
@if ($tmp)
<img src="{{ $tmp }}" class="block mb-3 h-60">
<input type="file" class="block" name="thumbnail" wire:model="thumbnail">
@else
<div class="mt-1 flex items-center">
    @include('icons.add-photo', ['style' => 'h-12 w-12 text-gray-400'])
    <input type="file" class="ml-2 block" name="thumbnail" wire:model="thumbnail">
</div>
@endif
@endif
</div> --}}