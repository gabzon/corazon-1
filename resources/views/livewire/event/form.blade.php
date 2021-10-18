<div class="overflow-hidden">
    <x-slot name="css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"
            integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA=="
            crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </x-slot>
    <form wire:submit.prevent="save" method="POST">
        <header class="relative bg-gray-50 shadow z-20">
            <div class="max-w-full mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            {{ $action == 'store' ? __('Add event') : __('Edit event') }}
                        </h2>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4">
                        <a href="{{ url()->previous() }}"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Back
                        </a>
                        <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex bg-gray-100 min-h-full overflow-hidden">
            <div class="flex-1 overflow-hidden">
                <div class="h-screen overflow-y-scroll">
                    <div class="p-4 sm:p-5 md:p-6 lg:p-7 xl:p-8">
                        @if ($errors->any())
                        <div class="alert alert-danger p-2 mb-6">
                            <ul class="list-disc mx-8">
                                @foreach ($errors->all() as $error)
                                <li class="text-red-600">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="max-w-6xl mx-auto">
                            @include('livewire.event.form._main')

                            @if ($event->exists)
                            <br>
                            <br>
                            <div class="mb-20">
                                <div
                                    class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
                                    <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
                                        Pricing
                                    </h3>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="is_free" wire:model="event.is_free" name="is_free" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_free" class="font-medium text-gray-700">Free event</label>
                                        <span class="text-gray-500">check this box if this event is free</span>
                                    </div>
                                </div>
                                @if (!$event->is_free)
                                <livewire:shared.price-form :model="$event" modelName="Event" />
                                @endif
                            </div>
                            @endif
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 block w-96 h-screen bg-white overflow-y-auto xl:overflow-hidden">
                <div class="p-4 sm:p-5 md:p-6 lg:p-7 xl:p-8">
                    @include('livewire.event.form._sidebar')
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js"
        integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg=="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
</div>