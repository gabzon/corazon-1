<div>
    @if ($embed)
    <div x-show="tab === 'video'" id="tabs-2-panel-2" aria-labelledby="tabs-2-tab-2" role="tabpanel" tabindex="1">
        <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden mb-3">
            {!! $embed !!}
        </div>
    </div>
    @endif
</div>