<span id="user-registrations-status" class="inline-flex items-center {{ $size}} {{ $style}} font-medium {{ $color }}"
    data-tippy-placement="top" data-tippy-content="{{ $info }}">
    {{ $status }}
</span>
@push('modals')
<script>
    tippy('#user-registrations-status');
</script>
@endpush