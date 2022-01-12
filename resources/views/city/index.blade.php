<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('Cities') }}" />
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <x-ui.button route="{{ url()->previous() }}" color="secondary">
                    Back
                </x-ui.button>
                <x-ui.button route="{{ route('city.create') }}" css="ml-3">
                    Add City
                </x-ui.button>
            </div>
        </div>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <livewire:city.table />
            </div>
            <div class="my-10">
                <br>
            </div>
        </div>
    </div>
</x-app-layout>