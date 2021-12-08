<div class="rounded-lg overflow-hidden">
    {{-- <img class="object-cover" src="{{ auth()->user()->photo }}" alt=""> --}}
</div>
<section aria-labelledby="who-to-follow-heading">
    <div>
        <h2 id="who-to-follow-heading" class="text-base font-bold text-gray-900">
            Info
        </h2>
        <div class="mt-3 pb-2 flow-root">
            <ul role="list" class="-my-3 text-sm">
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Level</span>
                    <span class="text-gray-500 font-medium">{{ $course->level }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Focus</span>
                    <span class="text-gray-500 font-medium">{{ $course->focus }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Type</span>
                    <span class="text-gray-500 font-medium">{{ $course->type }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Status</span>
                    <span class="text-gray-500 font-medium">{{ $course->status }}</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<br>
<section aria-labelledby="who-to-follow-heading">
    <div>
        <h2 id="who-to-follow-heading" class="text-base font-bold text-gray-900">
            Schedule
        </h2>
        <div class="mt-3 flow-root">
            <ul role="list" class="-my-3 text-sm">
                <li class="flex items-center py-1 space-x-3 text-gray-600">
                    <x-partials.display-day-time :course="$course" />
                </li>
            </ul>
        </div>
    </div>
</section>
<br>
@if ($course->space)
<section aria-labelledby="who-to-follow-heading">
    <div>
        <h2 id="who-to-follow-heading" class="text-base font-bold text-gray-900">
            Location
        </h2>
        <div class="mt-3 pb-2 flow-root">
            <ul role="list" class="-my-3 text-sm">
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Name</span>
                    <span class="text-gray-500 font-medium">{{ $course->space->location->name }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Address</span>
                    <span class="text-gray-500 font-medium text-right">{{ $course->space->location->address }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Zip</span>
                    <span class="text-gray-500 font-medium">{{ $course->space->location->zip }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Status</span>
                    <span class="text-gray-500 font-medium">{{ $course->space->location->city->name }}</span>
                </li>
                <li class="flex justify-between items-center py-1 space-x-3">
                    <span class="text-gray-900 font-medium">Map</span>
                    <a href="{{ $course->space->location->google_maps_shortlink }}" target="_blank"
                        class="text-indigo-500 hover:text-indigo-700 font-medium">Open</a>
                </li>
            </ul>
        </div>
    </div>
</section>
@endif