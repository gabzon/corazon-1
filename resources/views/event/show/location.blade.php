<div class="my-4">
    @if ($event->location)
    <x-location.details :location="$event->location" />
    @endif
</div>