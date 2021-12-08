<div>
    <label for="classroom" class="block text-sm font-medium text-gray-700">Space</label>
    <select id="classroom" name="classroom" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="" default selected>Choose space</option>
        @foreach (\App\Models\Space::all() as $room)
        <option value="{{ $room->id }}">{{ $room->location->name}} ({{ $room->name }})</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>