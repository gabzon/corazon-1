<div class="sm:col-span-6">
    <div>
        <label for="thumbnail" class="block text-sm font-medium text-gray-700">
            Thumbnail
        </label>
        <div class="">
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
        </div>
        @error('thumbnail') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
    </div>
</div>