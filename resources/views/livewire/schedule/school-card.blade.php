<div class="bg-white rounded-lg p-2 mb-4 hover:shadow-md border">
    <a href="{{ route('course.show', $class) }}">
        <div class="text-sm flex justify-between text-gray-500 items-center space-x-1">
            <div>
                {{ $time }}
            </div>
            <div>
                {{-- Kn {{ abs($class->full_price) }} --}}
            </div>
        </div>
        <h3 class="font-semibold text-lg capitalize">{{ $class->name }}</h3>
        <h4 class="font-semibold text-md text-gray-700">{{ $class->tagline }}</h4>
        <div class="text-sm items-center text-gray-500 capitalize">
            <div>
                {{ $class->level }}
                <x-shared.level-tip level="{{ $class->level_code }}" />
            </div>
            <div>
                {{ $class->focus }}
            </div>
        </div>
    </a>
    @auth
    <div class="my-1">
        <x-shared.register-like-bookmark-buttons :model="$class" size="sm" />
    </div>
    @endauth
</div>