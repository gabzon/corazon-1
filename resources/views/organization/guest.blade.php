<x-guest-layout>
    <x-slot name="css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    </x-slot>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center min-w-0">
                <img class="inline-block h-10 w-10 rounded-full mr-2 bg-gray-100" lazy="loading"
                    src="{{ $organization->icon }}" alt="{{ $organization->name }}">
                <x-typo.page-heading title="{{ $organization->name }}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <x-ui.button route="{{ url()->previous() }}" color="secondary">
                    Back
                </x-ui.button>
            </div>
        </div>
    </x-slot>
    @include('organization.view._content')
</x-guest-layout>