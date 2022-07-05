<div>
    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
    <select id="status" name="{{ $name }}" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror">
        <option value="" default selected disabled>Select status</option>
        <option value="active">Active</option>
        <option value="canceled">Canceled</option>
        <option value="draft">Draft</option>
        <option value="finished">Finished</option>
        <option value="full">Full</option>
        <option value="inactive">Inactive</option>
        <option value="postpone">Postpone</option>
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>