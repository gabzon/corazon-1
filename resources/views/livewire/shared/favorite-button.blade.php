<div class="ml-3 inline-flex items-center">
    @can('favorite', $model)
    <form wire:submit.prevent="favorite" {{-- action="{{ route('like') }}" method="POST" --}}>
        @csrf
        <input type="hidden" name="favoritable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button id="favorite" data-tippy-placement="top" data-tippy-content="Favorite"
            class="py-2 flex items-center justify-center text-gray-400 hover:text-indigo-600">
            {{-- @lang('Like') --}}
            @include('icons.heart')
        </button>
    </form>
    @endcan

    @can('unfavorite', $model)
    <form wire:submit.prevent="unfavorite" {{-- action="{{ route('unlike') }}" method="POST" --}}>
        @csrf
        @method('DELETE')
        <input type="hidden" name="favoritable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button id="unfavorite" data-tippy-placement="top" data-tippy-content="Unfavorite"
            class="py-2 flex items-center justify-center text-indigo-500 hover:text-indigo-700">
            {{-- @lang('Unlike') --}}
            @include('icons.heart-fill')
        </button>
    </form>
    @endcan

    @if ($withCount)
    <span class="mx-1">
        {{ trans_choice('{0} 0 |{1} :count |[2,*] :count 0', count($model->favorites), ['count' =>
        count($model->favorites)]) }}
    </span>
    @endif

    @push('modals')
    <script>
        tippy('#favorite');
        tippy('#unfavorite');
    </script>
    @endpush
</div>