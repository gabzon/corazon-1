<div>
    @if ($withLabel)
    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
    @endif
    <select id="city" name="city" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="" default selected>Choose city</option>
        @foreach (\App\Models\City::orderBy('name','asc')->get() as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>