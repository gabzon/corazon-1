<div>
    @if ($withLabel)
    <label for="city" class="block text-sm font-medium text-gray-700">Type</label>
    @endif
    <select id="city" name="city" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="" default selected>Choose type</option>
        <option value="dance studio">Dance Studio</option>
        <option value="hotel">Hotel</option>
        <option value="bar">Bar</option>
        <option value="restaurant">Restaurant</option>
        <option value="nightclub">NightClub</option>
        <option value="fitness center">Fitness Center</option>
        <option value="sport club">Sport Club</option>
        <option value="kindergarten">Kindergarten</option>
        <option value="School">school</option>
        <option value="event venue">Event Venue</option>
        <option value="congress hall">Congress Hall</option>
        <option value="warehouse">Warehouse</option>
        <option value="other">Other</option>
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>