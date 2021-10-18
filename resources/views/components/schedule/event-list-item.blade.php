<li
    class="relative flex bg-white py-3 px-3 hover:bg-gray-100 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 overflow-hidden">
    <img class="h-16 w-16 bg-indigo-100 object-cover" src="{{ $item->thumbnail }}" alt="">
    <div class="ml-3 w-full">
        <div class="grid grid-cols-2">
            <div>
                <a href="{{ route('show.event', $item) }}" class="block focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <h2 class="text-sm font-medium text-gray-900 truncate">{{ $item->name }}</h2>
                    <span class="text-sm text-gray-500 truncate block">
                        {{ implode(', ',$item->styles->pluck('name')->toArray()) }}
                    </span>
                    <time class="text-sm text-gray-500 inline-flex items-center">
                        {{ $item->start_date->format('M j, Y') }} @ {{ $item->getTime('start_time')->format('H:i') }}
                    </time>
                </a>
            </div>
            <div>
                <p class="text-sm text-gray-500 truncate text-right">{{ $item->city->name }}</p>
                <p class="text-sm text-gray-500 truncate text-right">
                    @if ($item->is_online)
                    online
                    @else
                    {{ $item->location->shortname ?? $item->location->name  }}
                    @endif
                </p>
                <p>
                    <x-shared.price-display :model="$item" />
                </p>
            </div>
        </div>
    </div>
</li>