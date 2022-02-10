<div class="inline-flex items-center">
    @can('favorite', $model)
    <form wire:submit.prevent="favorite" {{-- action="{{ route('like') }}" method="POST" --}}>
        @csrf
        <input type="hidden" name="favoritable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button id="favorite" data-tippy-placement="top" data-tippy-content="Favorite"
            class="p-2 flex items-center justify-center text-gray-500 bg-gray-100 hover:bg-indigo-100 hover:text-indigo-600 rounded-full">
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
            class="p-2 flex items-center justify-center text-indigo-500 bg-indigo-100 hover:bg-gray-100 hover:text-gray-500 rounded-full">
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