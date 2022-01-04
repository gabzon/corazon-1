<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Event</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Default information required to update an event
                </p>

                @if ($errors->any())
                <div class="alert alert-danger p-2 mb-6">
                    <ul class="list-disc mx-4">
                        @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.city-select wire:model="event.city_id" name="event.city_id" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.location-select wire:model="event.location_id" name="event.location_id"
                                    city="{{ $event->city_id }}" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <div>
                                    <label for="event.type"
                                        class="block text-sm font-medium text-gray-700 capitalize">Type</label>

                                    <select id="event.type" name="event.type" wire:model="event.type"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error('event.type') border-red-600 @enderror">
                                        <option value="" selected disabled>Choose type</option>

                                        <option value="party">Party</option>
                                        <option value="festival">Festival</option>
                                        <option value="workshop">Workshop</option>
                                        <option value="bootcamp">Bootcamp</option>
                                        <option value="concert">Concert</option>
                                        <option value="show">Show / Performance</option>
                                        <option value="competition">Competition / Battle</option>
                                        <option value="training">Training / Practica</option>
                                    </select>
                                    @error('event.type')
                                    <span class="text-red-600 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <x-form.text-input wire:model="event.name" name="event.name" label="Name" />
                            </div>
                            @if (auth()->user()->facebook_token)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="event.facebook_id" name="event.facebook_id"
                                    label="Facebook ID" />
                            </div>
                            @endif
                            <div class="col-span-6 sm:col-span-4">
                                <x-form.slug-input wire:model="event.slug" />
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.flatpickr wire:model="event.start_date" name="event.start_date"
                                    label="Start date" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.flatpickr wire:model="event.end_date" name="event.end_date" label="End date" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <div>
                                    <label for="event.status"
                                        class="block text-sm font-medium text-gray-700 capitalize">Status</label>

                                    <select id="event.status" name="event.status" wire:model="event.status"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error('event.status') border-red-600 @enderror">
                                        <option value="" selected disabled>Choose status</option>
                                        <option value="active">Active</option>
                                        <option value="draft">Draft</option>
                                        <option value="review">Review</option>
                                        <option value="soon">Soon</option>
                                        <option value="finished">Finished</option>
                                        <option value="canceled">Canceled</option>
                                        <option value="postpone">Postpone</option>
                                    </select>
                                    @error('event.status')
                                    <span class="text-red-600 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <livewire:component.select2.styles :model="$event" />
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-partials.saved-confirmation />
                            <div>
                                @if (auth()->user()->facebook_token)
                                <button type="button" wire:click="reimport"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Import from FB
                                </button>
                                @endif
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>