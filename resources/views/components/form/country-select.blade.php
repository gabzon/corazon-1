<div>
    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
    <select id="country" name="country" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="" default selected>Select country</option>
        @foreach ($countries as $country)
        <option value="{{ $country }}">{{ $country }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>