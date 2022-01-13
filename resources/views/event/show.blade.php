<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $event->name }}" />
            </div>
            @auth
            <div class="flex md:mt-0 md:ml-4">
                <x-ui.button route="{{ url()->previous() }}" color="secondary">
                    Back
                </x-ui.button>

                @can('update', $event)
                <a href="{{ route('event.edit', $event) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                @endcan

            </div>
            @endauth
        </div>
    </x-slot>

    <div class="bg-gray-100 h-screen overflow-y-scroll">
        <div class="max-w-2xl mx-auto py-4 sm:py-6 md:py-8 lg:py-10 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <div class="flex flex-col">
                    @include('event.show.left')
                </div>

                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    @include('event.show.right')
                </div>
            </div>
            <div class="my-16">&nbsp;</div>
        </div>
    </div>

</x-app-layout>