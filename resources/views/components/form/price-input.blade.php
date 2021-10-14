<div>
    <label for="{{ $label }}" class="block text-sm font-medium text-gray-700 capitalize">
        {{ $label ?? $name }}
    </label>
    <div class="mt-1">
        <input type="number" min="0" name="{{ $name }}" id="{{ $name }}" autocomplete="{{ $name }}" {{ $attributes}}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
        @if ($description)
        <p class="mt-1 text-sm text-gray-500">
            {{ $description }}
        </p>
        @endif
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>