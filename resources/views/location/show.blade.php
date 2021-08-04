<x-admin-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between bg-white">
            <div class="flex-1 min-w-0">
                <h1 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    {{ $location->name }}
                </h1>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('location.edit', $location) }}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm
                font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
            </div>
        </div>
    </x-slot>

    <main class="flex">
        <div class="flex-1 h-screen overflow-y-auto">
            <section aria-labelledby="primary-heading"
                class="min-w-0 flex-1 h-full flex flex-col overflow-hidden lg:order-last">
                <div class="mx-3 sm:mx-4 md:mx-6 lg:mx-8 my-4">

                    <h2 class="flex-1 text-lg font-bold text-gray-900">Address</h2>
                    <x-location.map :location="$location" />

                    <div class="my-8">
                        <header class="flex justify-between items-center">
                            <h2 class="flex-1 text-lg font-bold text-gray-900">Classrooms</h2>
                            <a href="{{ route('classroom.create', ['location' => $location]) }}"
                                class="text-sm underline text-indigo-700 hover:text-indigo-500">Add
                                Classroom</a>
                        </header>

                        <div class="my-3">
                            @include('location._classrooms')
                        </div>
                    </div>
                </div>

            </section>


        </div>
        <!-- Secondary column (hidden on smaller screens) -->
        <aside class="hidden w-96 p-8 bg-white border-l border-gray-200 overflow-y-auto lg:block">
            <x-location.description-card :location="$location" />
        </aside>

    </main>
</x-admin-layout>