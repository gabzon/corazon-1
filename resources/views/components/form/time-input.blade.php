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
        <input type="text" name="{{ $name }}" id="{{$name}}" autocomplete="{{ $name }}" {{ $attributes}}
            placeholder="{{ $label ?? $name }}"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
    </div>
    <span class="text-gray-500 text-xs">Format hh:mm:ss</span>
    @if ($description)
    <p class="mt-1 text-sm text-gray-500">
        {{ $description }}
    </p>
    @endif
    @error($name)
    <span class="text-red-600 text-xs block">{{ $message }}</span>
    @enderror
</div>


{{-- <slot name="head">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/timepicker@1.13.18/jquery.timepicker.min.css"
        integrity="sha256-EzMOwD6K6soXRaQhT+gRcOq2ibZJfCIXWvoO/yPdUSc=" crossorigin="anonymous">
</slot>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/timepicker@1.13.18/jquery.timepicker.min.js"
    integrity="sha256-PT/F6mtSYUIiRNODh9cJy3aCleELFicGp7kKS5WQD1Q=" crossorigin="anonymous"></script>
@push('scripts')
<script>
    $(document).ready(function(){                               
        $('#start_time').timepicker();
    });
</script>
@endpush --}}