<div class="w-full">
    <div class="prose leading-5">
        <h3>{{ $course->tagline }}</h3>
        <div class="mb-4 font-semibold">{{ $course->excerpt }}</div>
        <div class="w-full">{!! $course->description !!}</div>
    </div>
    <br>
    <div class="mr-3 sm:mr-0">
        <table class="w-full">
            <tr class="py-3 text-sm font-medium border-b">
                <td class="text-gray-500 py-2">Styles</td>
                <td class="text-gray-900 py-2">
                    @foreach ($course->styles as $item)
                    {{ $item->name }},
                    @endforeach
                </td>
            </tr>
            <tr class="text-sm font-medium border-b">
                <td class="text-gray-500 py-2">Type</td>
                <td class="text-gray-900 py-2">{{ $course->type }}</td>
            </tr>
            <tr class="text-sm font-medium border-b">
                <td class="text-gray-500 py-2">Duration</td>
                <td class="text-gray-900 py-2">{{ $course->duration }}</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="mr-3 sm:mr-0">
        <h3 class="flex-1 text-lg font-bold text-gray-900">Location</h3>
        <x-location.details :location="$course->classroom->location" />
    </div>
</div>