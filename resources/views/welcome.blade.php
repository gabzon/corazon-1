<x-guest-layout>
    @guest
    <div class="relative bg-indigo-50 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative h-full max-w-7xl mx-auto">
                <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-indigo-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-indigo-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        {{-- <span class="block xl:inline">All-in-one</span> --}}
                        <span class="block xl:inline">Dancing</span>
                        <span class="block text-indigo-600 xl:inline">agenda</span>
                        {{-- <span class="block text-indigo-600 xl:inline">dance platform</span> --}}
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        All dancing events in Croatia and around in one place.
                    </p>
                </div>
            </main>
        </div>
    </div>
    @endguest

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-indigo-50">
        <div class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Ready to start dancing?</span>
                <span class="block">Find events or courses near you</span>
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="#main"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Latest events
                    </a>
                </div>
                <div class="ml-3 inline-flex">
                    <a href="#courses-catalogue"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        Find courses
                    </a>
                </div>
            </div>
        </div>
    </div>


    <main id="main">
        <div class="bg-indigo-800">
            <h2 class="text-3xl font-bold text-gray-100 text-center pt-10">Latest Events</h2>
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:schedule.events />
                <div class="flex justify-center mb-10">
                    <a href="{{ route('events.catalogue') }}"
                        class="inline-flex items-center px-6 py-3 border border-white shadow-sm text-base font-medium rounded-md text-white bg-transparent hover:bg-gray-50 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        View all events
                    </a>
                </div>
            </div>
            <br>
        </div>

        <div id="courses-catalogue" class="border-t bg-gray-50">
            <div class="container mx-auto mt-10">
                <div class="my-3 max-w-sm mx-auto text-base text-gray-500 sm:text-lg md:my-5 md:text-xl md:max-w-3xl">
                    <p class="mx-3 sm:mx-4 md:mx-6 lg:mx-8">
                        If you would like to share your events, classes, ideas or comments please contact us by email to
                        <a href="mailto:info@corazon.dance" class="text-indigo-500">info@corazon.dance</a> or on
                        <a href="https://www.facebook.com/corazon.dance21" target="_blank"
                            class="text-indigo-500">Facebook</a>
                    </p>
                </div>
                <br>
                <h2 class="text-3xl font-bold text-gray-900 text-center my-10">Courses</h2>
                <livewire:catalogue.courses-catalogue />
            </div>
        </div>
    </main>

</x-guest-layout>