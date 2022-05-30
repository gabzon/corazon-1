<x-app-layout>
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
                @can('update', $organization)
                <x-ui.button route="#" css="ml-3" color="secondary">
                    Manage
                </x-ui.button>
                <x-ui.button route="{{ route('organization.edit', $organization) }}" css="ml-3">
                    Edit
                </x-ui.button>
                @endcan
            </div>

        </div>
    </x-slot>

    <div class="bg-white h-screen overflow-y-scroll">
        @include('organization.view._content')
        <div class="my-16">&nbsp;</div>
    </div>
</x-app-layout>