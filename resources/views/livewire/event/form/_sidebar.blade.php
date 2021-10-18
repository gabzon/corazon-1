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

    <x-form.select wire:model="event.status" name="event.status"
        :options="['active' => 'Active', 'draft' => 'Draft', 'review' => 'Review', 'soon' => 'Soon', 'finished' => 'Finished']"
        label="Status" />

    <x-form.select wire:model="event.type" name="event.type"
        :options="['party' => 'Party', 'festival' => 'Festival', 'workshop' => 'Workshop', 'bootcamp' => 'Bootcamp', 'concert' => 'Concert', 'show' => 'Show / Performance', 'competition' => 'Competition / Battle', 'training' => 'Training / Practica']"
        label="Type" />

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