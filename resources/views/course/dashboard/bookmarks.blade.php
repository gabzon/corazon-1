<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $course->name}}" />
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">

                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>

                @can('update', $course)
                <a href="{{ route('course.edit', $course) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="min-h-full">

        <div class="py-10">
            <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                    @include('course.dashboard.left')
                </div>
                <main class="lg:col-span-9 xl:col-span-6 overflow-y-scroll">
                    @include('course.dashboard._mobile-menu')
                    @include('course.dashboard._card')
                    <div class="my-4">
                        <h3 class="text-base font-medium text-gray-900">
                            Bookmarks
                        </h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            @forelse ($course->bookmarks as $user)
                            <li class="py-4 flex">
                                <img class="h-10 w-10 object-cover rounded-full" src="{{ $user->photo }}" alt="">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">{{ $user->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $user->username }}</p>
                                </div>
                            </li>
                            @empty
                            <li class="py-4 flex">
                                <p class="text-sm font-medium text-gray-500">Nothing found!</p>
                            </li>
                            @endforelse
                        </ul>
                    </div>
                </main>
                <aside class="hidden xl:block xl:col-span-4">
                    @include('course.dashboard.right')
                </aside>
            </div>
        </div>
    </div>

</x-app-layout>