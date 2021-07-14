<li
    class="relative flex bg-white py-3 px-3 hover:bg-gray-100 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 overflow-hidden">
    <img class="h-14 w-14 bg-indigo-100 object-cover" src="{{ $item->thumbnail }}" alt="">
    <div class="ml-3 w-full">
        <div class="flex justify-between">
            <div>
                <a href="{{ route('event.show', $item) }}" class="block focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900 truncate">{{ $item->name}}</p>
                    <p class="text-sm text-gray-500 truncate">
                        {{ implode(', ',$item->styles->pluck('name')->toArray()) }} </p>
                    <time datetime="2021-01-27T16:35" class="text-sm text-gray-500 inline-flex items-center">
                        {{ $item->start_date->format('F j, Y') }} -
                        {{ $item->getTime('start_time')->format('H:i') }}
                    </time>
                </a>
            </div>
            <div>
                <p class="text-sm text-gray-500 truncate flex justify-end">{{ $item->city->name }}</p>
                <p class="text-sm text-gray-500 truncate flex justify-end">
                    {{ $item->location->name }}
                </p>
                <p class="text-sm text-gray-500 truncate flex justify-end mt-1 uppercase">
                    {{ $item->price }}
                </p>
            </div>
        </div>
    </div>
</li>