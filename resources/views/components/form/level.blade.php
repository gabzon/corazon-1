<div>
    <label for="level" class="block text-sm font-medium text-gray-700">
        Level
    </label>
    <div class="mt-1">
        <select id="level" name="level" autocomplete="level" {{ $attributes }}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
            <option value="" default selected disabled>Choose level</option>
            <option>Open level</option>
            <option>Beginner</option>
            <option>Elementary</option>
            <option>Intermediate</option>
            <option>Upper intermediate</option>
            <option>Advanced</option>
            <option>Expert</option>
            <option>Master</option>
            <option>Pro</option>
        </select>
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>