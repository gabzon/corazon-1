<div class="relative bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
        <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784"
            fill="none" viewBox="0 0 640 784">
            <defs>
                <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-indigo-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
            <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
        </svg>
    </div>

    <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1>
                        <span
                            class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">
                            {{ $organization->shortname}}
                        </span>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            {{-- <span class="block text-gray-900">Data to enrich your</span> --}}
                            <span class="block text-indigo-600">{{ $organization->name }}</span>
                        </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        {{ $organization->about }}
                    </p>
                </div>
                <div
                    class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden"
                        width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                        <defs>
                            <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                    </svg>
                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <div
                            class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">Watch our video to learn more</span>
                            @if ($organization->video)
                            <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                                {!! $organization->video ?? ''!!}
                                {{-- <img src="{{ asset($location->logo) }}" alt="" class="object-cover"> --}}
                            </div>
                            @else
                            @if ($organization->getMedia('organization-logos')->last() != null)
                            <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                                <img src="{{ $organization->getMedia('organization-logos')->last()->getUrl() }}" alt=""
                                    class="object-cover">
                            </div>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>