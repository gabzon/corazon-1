<div class="container mx-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div>
            <h3 class="text-lg font-bold text-indigo-100">Parties</h3>
            <div class="mt-1 h-96 overflow-y-auto shadow bg-white border-2 border-indigo-200 rounded-sm">
                <ul class="divide-y divide-gray-200 overflow-hidden">
                    @forelse ($parties as $party)
                    <x-schedule.event-list-item :event="$party" />
                    @empty
                    <li class="py-5 mb-2 text-center">
                        <p class="text-sm font-medium text-gray-900 truncate">No parties found</p>
                    </li>
                    @endforelse
                </ul>
                <div class="my-2 mx-2">
                    <a href="{{ route('events.catalogue') }}"
                        class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all
                    </a>
                </div>
            </div>
        </div>
        <div>
            <h3 class="text-lg font-bold text-indigo-100">Workshops</h3>
            <div class="mt-1 h-96 overflow-y-auto shadow bg-white">
                <ul class="divide-y divide-gray-200">
                    @forelse ($workshops as $workshop)
                    <x-schedule.event-list-item :event="$workshop" />
                    @empty
                    <li class="py-5 mb-2 text-center">
                        <p class="text-sm font-medium text-gray-900 truncate">No workshops found</p>
                    </li>
                    @endforelse
                </ul>
                <div class="my-2 mx-2">
                    <a href="{{ route('events.catalogue') }}"
                        class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all
                    </a>
                </div>
            </div>
        </div>
        <div>
            <h3 class="text-lg font-bold text-indigo-100">Festivals</h3>
            <div class="mt-1 h-96 overflow-y-auto shadow bg-white">
                <ul class="divide-y divide-gray-200">
                    @forelse ($festivals as $festival)
                    <x-schedule.event-list-item :event="$festival" />
                    @empty
                    <li class="py-5 mb-2 text-center">
                        <p class="text-sm font-medium text-gray-900 truncate">No festivals found</p>
                    </li>
                    @endforelse
                </ul>
                <div class="my-2 mx-2">
                    <a href="{{ route('events.catalogue') }}"
                        class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>