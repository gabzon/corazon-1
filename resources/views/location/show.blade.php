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
        <div class="flex-1 overflow-y-auto">
            <section aria-labelledby="primary-heading"
                class="min-w-0 flex-1 h-full flex flex-col overflow-hidden lg:order-last">
                <div class="mx-3 sm:mx-4 md:mx-6 lg:mx-8 my-4">

                    <h2 class="flex-1 text-lg font-bold text-gray-900">Address</h2>
                    <x-location.map :location="$location" />

                    <div class="my-8">
                        <h2 class="flex-1 text-lg font-bold text-gray-900">Classrooms</h2>
                        @forelse ($location->classrooms as $item)
                        <div class="bg-white shadow overflow-hidden sm:rounded-md">
                            <ul class="divide-y divide-gray-200">
                                <li>
                                    <a href="{{ route('classroom.show', $item) }}" class="block hover:bg-gray-50">
                                        <div class="px-4 py-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-indigo-600 truncate">
                                                    {{ $item->name }}
                                                </p>
                                                <div class="ml-2 flex-shrink-0 flex">
                                                    <p
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Full-time
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="flex items-center text-sm text-gray-500">
                                                        @include('icons.squared-dashed', ['style' => 'w-4 h-4'])
                                                        <span class="ml-2">{{ $item->capacity }} m2</span>
                                                    </p>
                                                    <p
                                                        class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                        @include('icons.partners')
                                                        {{ $item->limit_couples }}
                                                    </p>
                                                    <p
                                                        class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                        @include('icons.partners')
                                                        {{ $item->limit_couples }}
                                                    </p>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                    @if ($item->dance_shoes == 1)
                                                    @include('icons.shoes', ['style'=>'w-8 h-8'])
                                                    @endif
                                                    <p>
                                                        Closing on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @empty
                        <a href="{{ route('classroom.create', ['location' => $location]) }}"
                            class="block border-2 border-dashed text-center py-4 border-gray-300 mt-3 hover:bg-indigo-600 hover:text-white">
                            Add Classroom
                        </a>
                        @endforelse
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