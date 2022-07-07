<section class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Dancing Styles</h2>
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @forelse ($styles as $style)
        <li class="relative" class="group">
            <a href="{{ route('style.view', $style)}}"
                class="block bg-{{ $style->color }} w-full rounded-xl text-center py-4 hover:bg-indigo-700">
                <h3 class="mt-2 block text-xl font-bold text-gray-100 truncate pointer-events-none">
                    {{ $style->name }}
                </h3>
                <span class="block text-sm font-medium text-gray-200 pointer-events-none">
                    {{ trans_choice('{0} no events|{1} :count event|[2,*] :count events', $style->events_count) }}
                </span>
            </a>
        </li>
        @empty
        <li>
            No styles found!
        </li>
        @endforelse
    </ul>
</section>