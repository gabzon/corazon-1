<div class="relative flex items-start">
    <div class="flex items-center h-5">
        <input id="{{ $name }}" name="{{ $name }}" type="checkbox" {{ $attributes }}
            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
    </div>
    <div class="ml-3 text-sm">
        <label for="candidates" class="font-medium text-gray-700 capitalize">{{ $label ?? $name }}</label>
        @if ($description)
        <p class="text-gray-500">{{ $description }}</p>
        @endif
    </div>
</div>


{{--
<div class="flex items-center">
    <div class="flex items-center h-5">
        <input wire:model="thursday" type="checkbox" class="form-checkbox df-form-checkbox">
    </div>
    <div class="ml-3 text-sm leading-5">
        <label for="thursday" class="font-medium text-gray-700">Thursday</label>
    </div>
</div> --}}