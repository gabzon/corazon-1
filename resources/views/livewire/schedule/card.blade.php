{{-- <div class="bg-white rounded-lg p-2 mb-4 mx-3 hover:shadow-md border">
    <a href="{{ route('show.course', $class) }}">
<div class="text-sm text-gray-500 flex justify-between items-center">
    <div>{{ $class->organization->name }}</div>
    <div>{{ $class->classroom->location->neighborhood }}</div>
</div>
<h1 class="font-semibold text-lg">{{ $class->name }}</h1>
<div class="text-sm text-gray-500">
    {{ $class->level }}
</div>
<div class="mt-1 text-xs flex items-center space-x-1">
    <x-partials.days-of-week :class="$class" />
</div>

<header class="flex justify-between items-center text-sm">
    <div>{{ $time }}</div>
    <div>kn {{ number_format($class->full_price, 0) }} </div>
</header>
</a>
</div> --}}

<div class="bg-white rounded-lg p-2 mb-4 mx-3 hover:shadow-md border">
    <a href="{{ route('show.course', $class) }}">
        <div class="mt-1 text-xs flex items-center space-x-1">
            <x-partials.days-of-week :class="$class" />
        </div>
        <h1 class="font-semibold text-lg capitalize">{{ $class->name }}</h1>
        <dl>
            {{-- <div class="flex justify-between text-sm font-medium">
                <dt class="text-gray-500">Period</dt>
                <dd class="text-gray-900">{{ $class->start_date->format('M j Y') }} -
            {{ $class->end_date->format('M j Y')}}</dd>
</div> --}}

<div class="flex justify-between text-sm font-medium">
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
    <dd class="text-gray-900">{{ $class->organization->name }}</dd>
</div>

<div class="flex justify-between text-sm font-medium">
    <dt class="text-gray-500">Location</dt>
    <dd class="text-gray-900">{{ $class->classroom->location->neighborhood }}</dd>
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
{{-- <div class="mt-2 flex justify-end">
            <button type="button"
                class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Register
            </button>
        </div> --}}
</a>
</div>