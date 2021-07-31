<div class="space-y-6">
    <div>
        <livewire:component.thumbnail image="{{ $event->thumbnail }}" />
    </div>

    <x-form.location-select wire:model="event.location_id" name="event.location_id" />

    {{-- <livewire:component.select2 :model="$event" select="styles" /> --}}
    <livewire:component.select2.styles :model="$event" />
    <livewire:component.select2.organizations :model="$event" />

    {{-- <livewire:component.select2 :model="$event" select="organizations" /> --}}

    <x-form.select wire:model="event.status" name="event.status" :options="['active', 'draft', 'soon', 'expired']"
        label="Status" />

    <x-form.select wire:model="event.type" name="event.type"
        :options="['party', 'festival', 'workshop', 'bootcamp', 'concert','show/performance', 'battle', 'practica']"
        label="Type" />

    {{-- <livewire:component.select2 :model="$event" select="styles" /> --}}

</div>