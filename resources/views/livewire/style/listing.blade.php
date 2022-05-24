<section class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Dancing Styles</h2>
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @forelse ($styles as $style)
        <li class="relative">
            <a href="{{ route('style.view', $style)}}">
                <div
                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                    <img src="{{ $style->coverImage }}" alt=""
                        class="object-cover pointer-events-none group-hover:opacity-75">
                </div>
                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $style->name }}
                </p>
                <p class="block text-sm font-medium text-gray-500 pointer-events-none">
                    {{ trans_choice('{0} no events|{1} :count event|[2,*] :count events', $style->events_count) }}
                </p>
            </a>
        </li>
        @empty
        <li>
            No styles found!
        </li>
        @endforelse
    </ul>
</section>