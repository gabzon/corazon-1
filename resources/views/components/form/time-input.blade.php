<div>
    @if ($label)
    <label for="{{ $label }}" class="block text-sm font-medium text-gray-700 capitalize">
        {{ $label }}
    </label>
    @endif
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
            @include('icons.clock', ['style' => 'w-4 h-4 text-gray-400'])
        </div>
        <input type="time" name="{{ $name }}" id="{{ $name }}" autocomplete="{{ $name }}" {{ $attributes}}
            placeholder="{{ $label ?? $name }}"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
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