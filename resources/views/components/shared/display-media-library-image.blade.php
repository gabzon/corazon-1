<div>
    @if ($model->getMedia($collection)->last() != null)
    <img src="{{ $model->getMedia($collection)->last()->getUrl() }}" alt="corazon {{ $alt }}" class="h-12"
        lazy="loading">
    @endif
</div>