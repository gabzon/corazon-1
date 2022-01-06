<x-guest-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $course->name}}" />
            </div>
        </div>
    </x-slot>

    <div class="w-full flex flex-wrap">
        <div class="bg-gray-50 w-full md:w-3/4 order-last md:order-first">
            @if ($course->video1)
            <main class="grid grid-cols-1 sm:grid-cols-5 gap-10 my-3 mx-3 md:mx-6 lg:mx-8">
                <div class="col-span-5 sm:col-span-2 space-y-6">
                    <div>
                        @include('course.show.media')
                    </div>
                </div>
                <div class="col-span-5 sm:col-span-3 space-y-6">
                    @include('course.show.details')
                </div>
            </main>
            @else
            <div class="max-w-5xl mx-auto my-5 px-3 md:px-4 lg:px-6">
                @include('course.show.details')
                <br>
            </div>
            @endif
        </div>
        <aside class="w-full md:w-1/4">
            <div class="sticky top-6 space-y-4 px-3 sm:px-4 md:px-6 lg:px-8">
                @include('course.show.sidebar')
            </div>
        </aside>
    </div>
</x-guest-layout>