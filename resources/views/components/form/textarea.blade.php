<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 capitalize">
        {{ $label ?? $name }}
    </label>
    <div class="mt-1">
        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" {{ $attributes }}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
        @if ($description)
        <p class="mt-2 text-sm text-gray-500">{{ $description }}</p>
        @endif
    </div>
    @error($name)
    <span class="text-xs text-red-600">{{ $message }}</span>
    @enderror

</div>