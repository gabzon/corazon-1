<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('Events') }}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <x-ui.button route="{{ url()->previous() }}" color="secondary">
                    Back
                </x-ui.button>
                @can('create', 'App\Models\Event')
                <x-ui.button route="{{ route('event.create') }}" css="ml-3">
                    Add Event
                </x-ui.button>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="py-4 sm:py-6 md:py-8 h-screen overflow-y-scroll">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <livewire:event.table />
            <div class="my-10">&nbsp;</div>
        </div>
    </div>

</x-app-layout>