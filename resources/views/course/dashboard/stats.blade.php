<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $course->name}}" />
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ route('lesson.create', ['cid' => $course]) }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Lesson
                </a>
                <a href="{{ route('course.edit', $course) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
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
                    Comming soon!
                    <div class="mt-4">
                        <div>
                            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Registered
                                    </dt>
                                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                        24
                                    </dd>
                                </div>

                                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Avg. Female
                                    </dt>
                                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                        58.16%
                                    </dd>
                                </div>

                                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Avg. Male
                                    </dt>
                                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                        24.57%
                                    </dd>
                                </div>
                            </dl>
                        </div>

                    </div>
                </main>
                <aside class="hidden xl:block xl:col-span-4">
                    @include('course.dashboard.right')
                </aside>
            </div>
        </div>
    </div>

</x-app-layout>