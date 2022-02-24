<div class="">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
            <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Our Team</h2>
                {{-- <p class="text-xl text-gray-500">Odio nisi, lectus dis nulla. Ultrices maecenas vitae rutrum dolor
                    ultricies donec risus sodales. Tempus quis et.</p> --}}
            </div>
            <ul role="list"
                class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                @foreach ($organization->teachers as $teacher)
                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" src="{{ $teacher->photo }}"
                                alt="{{ $teacher->name }}">
                        </div>

                        <div class="space-y-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <h3>{{ $teacher->name }}</h3>
                                {{-- <p class="text-indigo-600">Front-end Developer</p> --}}
                            </div>
                            <ul role="list" class="flex space-x-5">
                                @if ($teacher->facebook)
                                <li>
                                    <a href="{{ $teacher->facebook }}" class="text-gray-400 hover:text-gray-500">
                                        @include('icons.social.facebook')
                                    </a>
                                </li>
                                @endif

                                @if ($teacher->linkedin)
                                <li>
                                    <a href="{{ $teacher->facebook }}" class="text-gray-400 hover:text-gray-500">
                                        @include('icons.social.facebook')
                                    </a>
                                </li>
                                @endif

                                @if ($teacher->twitter)
                                <a href="{{ $teacher->facebook }}" class="text-gray-400 hover:text-gray-500">
                                    @include('icons.social.facebook')
                                </a>
                                @endif

                                @if ($teacher->instagram)
                                <a href="{{ $teacher->facebook }}" class="text-gray-400 hover:text-gray-500">
                                    @include('icons.social.facebook')
                                </a>
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>