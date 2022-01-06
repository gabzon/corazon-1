<x-guest-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $event->name}}" />
            </div>
        </div>
    </x-slot>

    <div class="bg-gray-50">
        <div class="max-w-2xl mx-auto py-10 px-4 sm:py-10 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">

                <div class="flex flex-col">
                    @include('event.show.left')
                </div>

                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    @include('event.show.right')
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>