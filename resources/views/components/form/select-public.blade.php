<div>
    <label for="public" class="block text-sm font-medium text-gray-700">Public type</label>
    <select id="public" name="{{ $name }}" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="everyone" default selected>Everyone</option>
        <option value="women">Women</option>
        <option value="men">Men</option>
        <option value="kids">Kids (< 12y)</option>
        <option value="teenagers">Teenagers (< 18y)</option>
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>