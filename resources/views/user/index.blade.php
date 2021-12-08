<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">
        <livewire:user.table />
        <div class="my-10">&nbsp;</div>
    </div>

</x-app-layout>