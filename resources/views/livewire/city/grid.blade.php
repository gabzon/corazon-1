<ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
    @forelse ($cities as $city)
    <li class="relative">
        <a href="{{ route('city.agenda', $city->slug) }}">
            <div
                class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                <img src="{{ $city->coverImage }}" alt=""
                    class="object-cover pointer-events-none group-hover:opacity-75">
                <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                </button>
            </div>
            <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $city->name }}, {{
                $city->country }}</p>
            <p class="block text-sm font-medium text-gray-500 pointer-events-none">{{ $city->events_count }} events</p>
        </a>
    </li>
    @empty

    @endforelse
</ul>