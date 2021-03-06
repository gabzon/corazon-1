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

    <div class="h-screen overflow-y-scroll">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('course.dashboard.left')
            </div>
            <main class="lg:col-span-9 xl:col-span-9 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('course.dashboard._mobile-menu')
                <livewire:shared.registered-table :model="$course" />
                <div class="my-28 md:my-24">&nbsp;</div>
            </main>
        </div>
    </div>

</x-app-layout>






{{-- <div class="h-screen overflow-y-scroll">
    <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
            @include('course.dashboard.left')
        </div>
        <main class="lg:col-span-9 xl:col-span-6">
            <div class="py-4 sm:py-6 md:py-8 lg:py-10">
                @include('course.dashboard.main')
            </div>
        </main>
    </div>
</div> --}}