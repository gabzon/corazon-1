<div>
    <label for="school" class="block text-sm font-medium text-gray-700">Organization</label>
    <select id="school" name="school" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="" default selected>Choose organization</option>
        @foreach (\App\Models\Organization::all() as $school)
        <option value="{{ $school->id }}">{{ $school->name }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>