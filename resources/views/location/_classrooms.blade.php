<div class="overflow-hidden sm:rounded-md">
    <ul class="divide-y divide-gray-200 border">
        @forelse ($location->classrooms as $item)
        <li class="bg-white">
            <a href="{{ route('classroom.show', $item) }}" class="block hover:bg-gray-50">
                <div class="px-4 py-4 flex items-center sm:px-6">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                        <div class="truncate">
                            <div class="text-sm flex">
                                <div class="font-medium text-indigo-600 truncate">{{ $item->name }}</div>
                                <div class="ml-5 flex-shrink-0 font-normal text-gray-500 flex items-center">
                                    @include('icons.squared-dashed', ['style' => 'w-4 h-4'])
                                    <span class="ml-1">{{ $item->capacity }} m2</span>
                                </div>
                                <div class="ml-5 flex-shrink-0 font-normal text-gray-500 flex items-center">
                                    @include('icons.people', ['style' => 'w-6 h-6'])
                                    <span class="ml-1">{{ $item->limit_couples }} capacity</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                            @if ($item->dance_shoes == 1)
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">dancing
                                shoes required</span>
                            @else
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Any
                                shoes allowed</span>
                            @endif
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
        <a href="{{ route('classroom.create', ['location' => $location]) }}"
            class="block border-2 border-dashed text-center py-4 border-gray-300 mt-3 hover:bg-indigo-600 hover:text-white">
            Add Classroom
        </a>
        @endforelse
    </ul>
    <div class="mt-2 flex justify-end">
        <a href="{{ route('classroom.create', ['location' => $location]) }}"
            class="text-right text-sm underline text-indigo-700 hover:text-indigo-500">Add
            Classroom</a>
    </div>

</div>