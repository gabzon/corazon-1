<div class="flex items-center space-x-3">
    <span id="user-registrations-status"
        class="inline-flex items-center {{ $size}} {{ $style}} font-medium {{ $color }}" data-tippy-placement="top"
        data-tippy-content="{{ $info }}">
        {{ $status }}
    </span>
    @if ($status == 'invitee' && ($user->id == auth()->user()->id))
    <button id="accept" wire:click="accept" class=" text-green-500 hover:text-indigo-800" data-tippy-placement="top"
        data-tippy-content="Accept invitation">
        @include('icons.check', ['style'=>'w-5 h-5'])
    </button>
    <button id="cancel" wire:click="cancel" class="pr-2 text-red-500 hover:text-indigo-800" data-tippy-placement="top"
        data-tippy-content="Cancel invitation">
        @include('icons.x', ['style'=>'w-3 h-3'])
    </button>
    @endif
</div>

@push('modals')
<script>
    tippy('#user-registrations-status');
    tippy('#accept');
    tippy('#cancel');
</script>
@endpush