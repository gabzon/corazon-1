<div>
    <label for="level_number" class="block text-sm font-medium text-gray-700">
        Level Number
    </label>
    <div class="mt-1">
        <input type="number" name="level_number" id="level_number" autocomplete="level_number" min="1" {{ $attributes }}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('level_number') border-red-600 @enderror">
    </div>
    @error('level_number')
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>