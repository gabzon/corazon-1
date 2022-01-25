<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ __('Roles') }}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
            </div>
        </div>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <livewire:role.list-form />
            <div class="my-20">&nbsp;</div>
        </div>
    </div>
</x-app-layout>