<div class="bg-white rounded-lg p-2 mb-4 mx-3 hover:shadow-md border">
    <a href="{{ route('course.view', $class) }}">
        <div class="mt-1 text-xs flex justify-between items-center space-x-1">
            <x-partials.days-of-week :class="$class" />
            @if ($class->organization->getMedia('organization-icons')->last() != null)
            <img class="inline-block h-8 w-8 rounded-full"
                src="{{ $class->organization->getMedia('organization-icons')->last()->getUrl() }}" alt="">
            @else
            <span class="h-8 w-8 bg-indigo-800 rounded-full flex justify-center items-center text-indigo-200 text-2xl">
                @include('icons.heart-fill')
            </span>
            @endif

        </div>
        <h3 class="font-semibold text-lg capitalize">{{ $class->name }}</h3>
        {{-- <h4 class="font-semibold text-md text-gray-700">{{ $class->tagline }}</h4> --}}
        <dl>
            {{-- <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Period</dt>
                <dd class="text-gray-900">{{ $class->start_date->format('M j') }} -
                    {{ $class->end_date->format('M j')}}</dd>
            </div> --}}

            <div class="mt-1 flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Schedule</dt>
                <dd class="text-gray-900">
                    <x-partials.display-day-time :course="$class" />
                </dd>
            </div>

            <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Level</dt>
                <dd class="text-gray-900">{{ $class->level }} {{ $class->level_number }}</dd>
            </div>

            <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">School</dt>
                <dd class="text-gray-900">{{ $class->organization->shortname ?? $class->organization->name }}</dd>
            </div>

            <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Location</dt>
                <dd class="text-gray-900">{{ $class->space->location->neighborhood }}</dd>
            </div>

            <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Focus</dt>
                <dd class="text-gray-900">{{ $class->focus }}</dd>
            </div>

            <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Price</dt>
                <dd class="text-gray-900">Kn {{ abs($class->full_price) }}</dd>
            </div>
        </dl>

    </a>
</div>