<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
    {{-- <span class="text-xs text-gray-500">15% left</span> --}}
    <div class="bg-{{ $color }}-600 text-md font-medium text-{{ $color }}-100 text-center p-0.5 leading-none rounded-full"
        style="width: {{ $percentage }}%"> {{ $percentage }} %</div>
</div>