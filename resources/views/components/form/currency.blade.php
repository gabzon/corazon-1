<div>
    <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
    <select id="currency" name="currency" {{ $attributes }}
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error($name) border-red-600 @enderror"">
        <option value="" selected disable>Choose Currency</option>
        <option value=" eur">Euro (EUR)</option>
        <option value="hrk">Croatian Kuna (HRK)</option>
        <option value="chf">Swiss Franc (CHF)</option>
        <option value="usd">US Dollars (USD)</option>
    </select>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>