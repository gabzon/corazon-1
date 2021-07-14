<div>
    <label for="focus" class="block text-sm font-medium text-gray-700">
        Focus
    </label>
    <div class="mt-1">
        <select id="focus" name="focus" autocomplete="focus" {{ $attributes }}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
            <option value="" selected disabled>Choose focus</option>
            <option>Partnerwork</option>
            <option>Footwork</option>
            <option>Styling</option>
            <option>Solo</option>
            <option>Choreography</option>
            <option>Stretching</option>
            <option>Fitness</option>
            <option>Theory</option>
            <option>Mixed</option>
            <option>Other</option>
        </select>
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>