<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('Courses') }}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>

                @can('create', App\Models\Course::class)
                <a href="{{ route('course.create') }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Course
                </a>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="py-5 h-screen overflow-y-scroll">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <livewire:catalogue.courses-catalogue />
            <div class="my-14">&nbsp;</div>
        </div>
    </div>
</x-app-layout>