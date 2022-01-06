@can('stats', $event)
<div class="my-6">
    {{-- @include('event.show.stats') --}}
</div>
@endcan

@can('viewInscribed', $event)
<div class="my-6">
    <livewire:shared.registered-table :model="$event" />
</div>
@endcan