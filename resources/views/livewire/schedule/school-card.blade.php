<div class="bg-white rounded-lg p-2 mb-4 mx-3 hover:shadow-md border">
    <a href="{{ route('show.course', $class) }}">
        <div class="text-sm flex justify-between text-gray-500 items-center space-x-1">
            <div>
                {{ $time }}
            </div>
            <div>
                Kn {{ abs($class->full_price) }}
            </div>
        </div>
        <h3 class="font-semibold text-lg capitalize">{{ $class->name }}</h3>
        <h4 class="font-semibold text-md text-gray-700">{{ $class->tagline }}</h4>
        <div class="text-sm items-center text-gray-500 capitalize">
            <div>
                {{ $class->level }}
            </div>
            <div>
                {{ $class->focus }}
            </div>
        </div>
    </a>
</div>