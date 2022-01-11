<article class="block">
    <div>
        <div class="flex space-x-3">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ $lesson->author->photo }}" alt="">
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-sm font-medium text-gray-900">
                    <a href="{{ route('profile.username', $lesson->author->username) }}" class="hover:underline">{{
                        $lesson->author->name }}</a>
                </p>
                <p class="text-sm text-gray-500">
                    <time datetime="2020-12-09T11:43:00">
                        {{ $lesson->created_at->format('F d') }} at {{
                        $lesson->created_at->format('H:i') }}
                    </time>
                </p>
            </div>
        </div>
        <h2 id="question-title-81614" class="mt-4 text-base font-medium text-gray-900">
            {{ $lesson->title }}
        </h2>
    </div>
    <div class="mt-2 text-sm text-gray-700 space-y-4">
        {!! $lesson->description !!}
        {{-- <ul>
            @forelse ($lesson->videos as $video)
            <li class="my-2">
                <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                    {!! $video->embed !!}
                </div>
            </li>
            @empty

            @endforelse
        </ul> --}}
    </div>
    <div class="mt-6 flex justify-between space-x-8">
        <div class="flex space-x-6">
            <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    @include('icons.heart')
                    <span class="font-medium text-gray-900">10</span>
                </button>
            </span>
            {{-- <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <!-- Heroicon name: solid/chat-alt -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium text-gray-900">11 participants</span>
                    <span class="sr-only">participants</span>
                </button>
            </span> --}}
            <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    @include('icons.users')
                    <span class="font-medium text-gray-900">
                        12
                    </span>
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