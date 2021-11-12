<div x-data="{ picker: @entangle($name) }"
    x-init="flatpickr( $refs.datepicker, {enableTime: true, dateFormat: 'Y-m-d H:i'})"
    x-on:change="picker = $event.target.value">
    <label for="{{ $label }}" class="block text-sm font-medium text-gray-700 capitalize">
        {{ $label ?? $name }}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
            @include('icons.calendar-outline', ['style' => 'w-4 h-4 text-gray-400'])
        </div>
        <input x-bind:value="picker" x-ref="datepicker" name="{{ $name }}" id="{{ $name }}" type="text"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
    </div>
    {{-- @if ($description)
    <p class="mt-1 text-sm text-gray-500">
        {{ $description }}
    </p>
    @endif --}}
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>



{{-- <div>
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
</div> --}}