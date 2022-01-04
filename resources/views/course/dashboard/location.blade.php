<div class="bg-white py-4 shadow  sm:rounded-lg">
    <article>
        <div class="px-4 sm:px-6 flex space-x-3">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ $course->space->location->photo }}" alt="">
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-sm font-medium text-gray-900">
                    <a href="#" class="hover:underline">{{ $course->space->location->name }}</a>
                </p>
                <span class="text-sm text-gray-500">{{ $course->space->name }}</span>
            </div>
        </div>
        <div class="mt-2 text-sm text-gray-700 space-y-4">
            {!! $course->space->location->google_maps !!}
        </div>
        <div class="px-4 sm:px-6 pt-2">
            <div class="flex justify-between">
                <ul class="text-sm text-gray-500">
                    <li>{{ $course->space->location->address }}</li>
                    <li>{{ $course->space->location->address_info }}</li>
                    <li>
                        {{ $course->space->location->zip }} {{
                        $course->space->location->city->name }}
                    </li>
                </ul>
                <div>
                    {{ $course->space->location->entry_code }}
                </div>
            </div>

        </div>
    </article>
</div>