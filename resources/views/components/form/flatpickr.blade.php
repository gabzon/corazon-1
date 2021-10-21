<div>
    <label for="{{ $label }}" class="block text-sm font-medium text-gray-700 capitalize">
        {{ $label ?? $name }}
    </label>
    <div class="mt-1">
        <x-flat-pickr name="{{ $name }}" id="{{ $name }}" {{ $attributes}}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>