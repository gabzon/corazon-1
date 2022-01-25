<div>
    <label for="focus" class="block text-sm font-medium text-gray-700">
        Focus
    </label>
    <div class="mt-1">
        <select id="focus" name="focus" autocomplete="focus" {{ $attributes }}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
            <option value="" selected disabled>Choose focus</option>
            <option value="partnerwork">Partnerwork</option>
            <option value="selfwork">Selfwork</option>
            <option value="choreography">Choreography</option>
            <option value="theory">Theory</option>
            <option value="mixed">Mixed</option>
            <option value="other">Other</option>
        </select>
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>