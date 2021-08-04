<div>
    <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
    <select id="currency" name="currency" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error('currency') border-red-600 @enderror"">
        <option value="" selected disable>Choose Currency</option>
        <option value=" eur">Euro</option>
        <option value="kn">Kuna</option>
        <option value="usd">US Dollars</option>
    </select>
    @error('currency')
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>