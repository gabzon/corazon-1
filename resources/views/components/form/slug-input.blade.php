<div>
    <label for="slug" class="block text-sm font-medium text-gray-700">
        Slug
    </label>
    <div class="mt-1">
        <input type="text" name="slug" id="slug" {{ $attributes }} disabled
            class="bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('slug') border-red-600 @enderror">
    </div>
    @error('slug')
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>