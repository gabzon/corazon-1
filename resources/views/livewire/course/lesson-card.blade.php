<article>
    <div>
        <div class="flex space-x-3">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ $lesson->author->photo }}" alt="">
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-sm font-medium text-gray-900">
                    <a href="#" class="hover:underline">{{ $lesson->author->name }}</a>
                </p>
                <p class="text-sm text-gray-500">
                    <a href="#" class="hover:underline">
                        <time datetime="2020-12-09T11:43:00">
                            {{ $lesson->created_at->format('F d') }} at {{
                            $lesson->created_at->format('H:i') }}
                            AM</time>
                    </a>
                </p>
            </div>
        </div>
        <h2 id="question-title-81614" class="mt-4 text-base font-medium text-gray-900">
            {{ $lesson->title }}
        </h2>
    </div>
    <div class="mt-2 text-sm text-gray-700 space-y-4">
        {!! $lesson->description !!}
        <ul>
            @forelse ($lesson->videos as $video)
            <li class="my-2">
                <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                    {!! $video->embed !!}
                </div>
            </li>
            @empty

            @endforelse
        </ul>
    </div>
    <div class="mt-6 flex justify-between space-x-8">
        <div class="flex space-x-6">
            <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <!-- Heroicon name: solid/thumb-up -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path
                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                    </svg>
                    <span class="font-medium text-gray-900">29</span>
                    <span class="sr-only">likes</span>
                </button>
            </span>
            <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <!-- Heroicon name: solid/chat-alt -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium text-gray-900">11</span>
                    <span class="sr-only">replies</span>
                </button>
            </span>
            <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <!-- Heroicon name: solid/eye -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium text-gray-900">2.7k</span>
                    <span class="sr-only">views</span>
                </button>
            </span>
        </div>
        <div class="flex text-sm">
            <span class="inline-flex items-center text-sm">
                <a href="{{ route('lesson.edit', $lesson) }}"
                    class="inline-flex space-x-1 text-gray-500 hover:text-indigo-700">
                    @include('icons.pen')
                    <span class="font-medium">Edit</span>
                </a>
            </span>
        </div>
    </div>
</article>