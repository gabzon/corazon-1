<section>
    <header class="mb-3">
        <div class="flex space-x-4">
            <div class="flex-1 min-w-0">
                <x-form.search-input name="search" wire:model="search" />
            </div>
            <button type="button"
                class="flex justify-center px-3.5 my-1 pt-3 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                @include('icons.filter', ['style' => 'text-gray-500 h-4 w-4'])
            </button>
        </div>
    </header>
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">
            @forelse ($collection as $item)
            <li>
                <a href="{{ route($showPath, $item) }}" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 flex items-center sm:px-6">
                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                            <div class="truncate">
                                <div class="flex text-sm">
                                    <p class="font-medium text-indigo-600 truncate">{{ $item->name }}</p>
                                    <p class="ml-1 flex-shrink-0 font-normal text-gray-500">
                                        {{ $item->type }}
                                    </p>
                                </div>
                                <div class="mt-2 flex">
                                    <div class="flex items-center text-sm text-gray-500 capitalize">
                                        {{ $item->start_date->format('M jS')}}
                                        @if ($model == 'course')
                                        | {{ $item->level }} {{ $item->level_code }}@if ($item->level_number){{
                                        '.' . $item->level_number }}@endif
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                                <x-shared.avatar-group :model="$item" />
                            </div>
                        </div>
                        <div class="ml-5 flex-shrink-0">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </a>
            </li>
            @empty
            <li>
                <p class="py-3 px-4 text-sm text-gray-600">Nothing found!</p>
            </li>
            @endforelse
        </ul>
    </div>
    <div class="m-3">
        {{ $collection->links() }}
    </div>
</section>