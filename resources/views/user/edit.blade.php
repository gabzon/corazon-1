<x-app-layout>

    <x-slot name="css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </x-slot>

    <header class="relative bg-gray-50 shadow z-20">
        <div class="max-w-full mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        {{ __('Edit profile') }}
                    </h2>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <a href="{{ url()->previous() }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Back
                    </a>
                    <a href="{{ route('user.show', $user) }}"
                        class="ml-2 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        View
                    </a>
                </div>
            </div>
        </div>
    </header>

    {{-- <x-slot name="aside">
        @include('user.aside')
    </x-slot> --}}

    <div class="h-screen overflow-y-scroll">

        <div class="max-w-7xl mx-auto pt-10 sm:px-6 lg:px-8">
            <livewire:user.name-email-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-info-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-address-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-social-form :user="$user" />
        </div>

        @if (auth()->user()->isAdmin())
        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-status-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.user-rights-form :user="$user" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.manager-form :user="$user" />
        </div>

        <x-jet-section-border />

        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user.instructor-form :user="$user" />
        </div> --}}
        @endif

        {{--
        <x-jet-section-border /> --}}

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--
            <livewire:user.interested-styles-form :user="$user" /> --}}
        </div>

        <div class="my-20">&nbsp;</div>
    </div>


    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush


</x-app-layout>