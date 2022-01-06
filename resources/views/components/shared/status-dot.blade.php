<span id="status-dot" class="inline-flex items-center w-2 h-2 rounded-full text-xs font-medium {{ $styles }}"
    data-tippy-placement="top" data-tippy-content="{{ $status}}"> </span>
@push('modals')
<script>
    tippy('#status-dot');
</script>
@endpush