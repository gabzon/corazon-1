<div>
    <label for="level" class="block text-sm font-medium text-gray-700">
        Level
    </label>
    <div class="mt-1">
        <select id="level" name="level" autocomplete="level" {{ $attributes }}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
            <option value="" default selected disabled>Choose level</option>
            <option value="op">Open level</option>
            <option value="a1">Beginner A1 (Absolute beginner)</option>
            <option value="a2">Beginner A2 (Medium beginner)</option>
            <option value="a3">Beginner A3 (Higher beginner)</option>
            <option value="b1">Intermediate B1 (Absolute intermediate)</option>
            <option value="b2">Intermediate B2 (Medium intermediate)</option>
            <option value="b3">Intermediate B3 (Higher intermediate)</option>
            <option value="c1">Advanced C1 (Absolute advanced)</option>
            <option value="c2">Advanced C2 (Medium advanced)</option>
            <option value="c3">Advanced C3 (Higher advanced)</option>
            <option value="d1">Master</option>
        </select>
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>