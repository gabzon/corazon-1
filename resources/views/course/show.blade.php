<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $course->name}}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                @auth
                <a href="{{ url()->previous() }}"
                    class="mr-2 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @include('icons.chevron-left', ['style'=>'w-3 h-3'])
                    <span class="hidden sm:inline sm:ml-2">Back</span>
                </a>

                @can('dashboard', $course)
                <a href="{{ route('course.dashboard', $course) }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @include('icons.dashboard')
                    <span class="hidden sm:inline sm:ml-2">Dashboard</span>
                </a>
                @endcan

                @can('update', $course)
                <a href="{{ route('course.edit', $course) }}"
                    class="ml-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @include('icons.pen')
                    <span class="hidden sm:inline sm:ml-2">Edit</span>
                </a>
                @endcan

                @endauth
            </div>
        </div>
    </x-slot>

    <div class="w-full flex flex-wrap h-screen overflow-y-scroll">
        <div class="bg-gray-50 w-full md:w-3/4 order-last md:order-first">
            @if ($course->video1)
            <main class="grid grid-cols-1 sm:grid-cols-5 gap-10 my-3 mx-3 md:mx-6 lg:mx-8">
                <div class="col-span-5 sm:col-span-2 space-y-6 ">
                    <div class="pt-3">
                        @include('course.show.media')
                    </div>
                </div>
                <div class="col-span-5 sm:col-span-3 space-y-6">
                    @include('course.show.details')
                    <div class="my-20">&nbsp;</div>
                </div>
            </main>
            @else
            <div class="h-screen overflow-y-scroll">
                <div class="max-w-5xl mx-auto my-5 px-3 md:px-4 lg:px-6">
                    @include('course.show.details')
                    <div class="my-20">&nbsp;</div>
                </div>
            </div>
            @endif
            <div class="my-10">&nbsp;</div>
        </div>
        <aside class="w-full md:w-1/4">
            <div class="sticky top-6 space-y-4 px-3 sm:px-4 md:px-6 lg:px-8">
                @include('course.show.sidebar')
            </div>
        </aside>
    </div>
</x-app-layout>