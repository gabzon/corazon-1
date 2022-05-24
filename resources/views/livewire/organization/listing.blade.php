<section>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($schools as $school)
        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
            <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('organization.view', $school) }}" class="text-gray-900 hover:text-indigo-700">
                            <h3 class="text-sm font-medium truncate">{{ $school->name }}</h3>
                        </a>
                        <span
                            class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">
                            {{ $school->status }}
                        </span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">
                        {{ implode(', ', $school->styles->pluck('name')->toArray()) }}
                    </p>
                    <p class="mt-1 text-gray-500 text-sm truncate">{{ $school->city->name }}</p>
                </div>
                <img class="w-14 h-14 bg-gray-300 rounded-lg flex-shrink-0" src="{{ $school->icon }}" alt="">
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">

                        @if ($school->facebook)
                        <a href="{{ $school->facebook }}" target="_blank"
                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                            @include('icons.social.facebook', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Facebook</span>
                        </a>
                        @else
                        <a href="mailto:{{$school->email}}"
                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                            @include('icons.email', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Email</span>
                        </a>
                        @endif
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                        @if ($school->phone)
                        <a href="tel:+1-202-555-0170"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                            <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span class="ml-3">Call</span>
                        </a>
                        @else
                        <a href="{{ $school->website}}"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                            @include('icons.website', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Website</span>
                        </a>
                        @endif

                    </div>
                </div>
            </div>
        </li>
        @empty
        No {{ $type }} found!
        @endforelse
    </ul>
    <div class="my-3 mx-3">
        {{ $schools->links()}}
    </div>
</section>