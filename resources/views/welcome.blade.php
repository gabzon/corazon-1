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
                        All dancing events in croatia and around in one place.
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md">
                            {{-- <a href="/auth/redirect"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                <span class="sr-only">Sign in with Facebook</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2 text-sm">Login with Facebook</span>
                            </a> --}}
                            {{-- <a href=""
                            class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-indigo-100 bg-indigo-600 hover:bg-indigo-700">

                        </a> --}}
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            {{-- <a href="#main"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                @include('icons.events')
                                <span class="ml-2 text-sm">Schedule</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @endguest

    <main id="main">
        <div class="bg-indigo-800">
            <h2 class="text-3xl font-bold text-gray-100 text-center pt-10">Events</h2>
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:schedule.events />
            </div>
            <br>
        </div>

        <div class="border-t bg-gray-50">
            <div class="container mx-auto mt-10">
                <p class="my-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:my-5 md:text-xl md:max-w-3xl">
                    Our goal is to make you life easier by putting all dancing events in croatia and around in one
                    place.
                    <br>
                    if you have any event, ideas or comments that you would like to share. You can write us an email to
                    <a href="mailto:info@corazon.dance" class="text-indigo-500">info@corazon.dance</a>
                </p>
                <br>
                <h2 class="text-3xl font-bold text-gray-900 text-center my-10">Courses</h2>
                <livewire:schedule.filters />
                <div class="py-10">
                    <livewire:schedule.catalogue />
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>