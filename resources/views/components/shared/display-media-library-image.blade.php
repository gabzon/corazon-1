<div>
    @if ($model->getMedia($collection)->last() != null)
    <img src="{{ $model->getMedia($collection)->last()->getUrl() }}" alt="corazon {{ $alt }}"
        class="object-cover pointer-events-none group-hover:opacity-75" lazy="loading">
    @endif
</div>