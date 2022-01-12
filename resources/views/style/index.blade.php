<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    {{ __('Styles') }}
                </h2>
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <x-ui.button route="{{ url()->previous() }}" color="secondary">
                    Back
                </x-ui.button>
                <x-ui.button route="{{ route('style.create') }}" css="ml-3">
                    Add Style
                </x-ui.button>
            </div>
        </div>
    </x-slot>

    <div class="py-4 sm:py-6 md:py-8 lg:py-10 h-screen overflow-y-scroll">
        <div class="max-w-full mx-auto px-3 sm:px-6 lg:px-8">
            <livewire:style.table />
        </div>
    </div>
</x-admin-layout>