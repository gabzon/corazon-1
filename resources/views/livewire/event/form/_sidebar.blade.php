<div class="space-y-6">
    <div>
        <livewire:component.thumbnail image="{{ $event->thumbnail }}" />
    </div>

    <x-form.city-select wire:model="event.city_id" name="event.city_id" />

    <x-form.location-select wire:model="event.location_id" name="event.location_id" />

    {{-- <livewire:component.select2 :model="$event" select="styles" /> --}}
    <livewire:component.select2.styles :model="$event" />
    <livewire:component.select2.organizations :model="$event" />

    {{-- <livewire:component.select2 :model="$event" select="organizations" /> --}}

    <div>
        <label for="event.status" class="block text-sm font-medium text-gray-700 capitalize">Status</label>

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

    <div>
        <label for="event.type" class="block text-sm font-medium text-gray-700 capitalize">Type</label>

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



    {{-- <livewire:component.select2 :model="$event" select="styles" /> --}}

    @if($event->exist)
    <div class="flex">
        <a href="{{ route('event.edit', $event) }}"
            class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm text-center font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Edit
        </a>
        <button wire:click="delete" type="submit"
            onclick="confirm('Are you sure you want to delete this event?') || event.stopImmediatePropagation()"
            class="flex-1 ml-3 bg-white py-2 px-4 border border-red-500 rounded-md text-center shadow-sm text-sm font-medium text-red-700 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            delete
        </button>
    </div>
    @endif

</div>