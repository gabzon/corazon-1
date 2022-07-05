<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $organization->name}}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                {{-- @can('update', $course)
                <a href="{{ route('organization.edit', $organization) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                @endcan --}}
            </div>
        </div>
    </x-slot>

    <div class="h-screen overflow-y-auto">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-full lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('organization.dashboard.nav')
            </div>
            <main class="lg:col-span-12 xl:col-span-9">
                <div class="py-4 sm:py-6 md:py-8 lg:py-10">

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                            <livewire:organization.form.default-form :organization="$organization" />
                        </div>
                    </div>

                    <x-jet-section-border />

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
                        <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                            <livewire:organization.form.general-form :organization="$organization" />
                        </div>
                    </div>

                    <x-jet-section-border />

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
                        <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                            <livewire:organization.form.address-form :organization="$organization" />
                        </div>
                    </div>

                    <x-jet-section-border />

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
                        <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                            <livewire:shared.social-media-form :model="$organization" />
                        </div>
                    </div>

                    <x-jet-section-border />

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
                        <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                            <livewire:organization.form.team :organization="$organization" />
                        </div>
                    </div>

                    @if (auth()->user()->is_super)
                    <x-jet-section-border />

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-0">
                        <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                            <livewire:shared.styles-form :model="$organization" />
                        </div>
                    </div>
                    <br>
                    @endif

                    <div class="my-28"></div>


                </div>
            </main>
            {{-- <aside class="hidden xl:block xl:col-span-4 py-4 sm:py-6 md:py-8 lg:py-10 border">
                Area to be defined
            </aside> --}}
        </div>
    </div>

</x-app-layout>