<div class="bg-white rounded-lg p-2 mb-4 mx-3 hover:shadow-md border">
    <a href="{{ route('course.show', $class) }}">
        <header class="flex justify-between items-center text-sm">
            <div>{{ $time }}</div>
            <div>kn {{ number_format($class->full_price, 0) }} </div>
        </header>

        <h1 class="font-semibold text-md">{{ $class->name }}</h1>
        <div class="text-sm text-gray-500">
            {{ $class->level }}
        </div>
        <div class="text-sm text-gray-500 flex justify-between items-end">
            <span>{{ $class->classroom->location->neighborhood }}</span>
        </div>
        <div class="text-sm text-gray-500">
            <span>{{ $class->organization->name }}</span>
        </div>
        <div class="mt-1 text-xs flex items-center space-x-1">
            <x-partials.days-of-week :class="$class" />
        </div>
    </a>
</div>