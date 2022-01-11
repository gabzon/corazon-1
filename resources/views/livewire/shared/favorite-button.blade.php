<div class="ml-4 inline-flex items-center">
    @can('favorite', $model)
    <form wire:submit.prevent="favorite" {{-- action="{{ route('like') }}" method="POST" --}}>
        @csrf
        <input type="hidden" name="favoritable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button
            class="p-2 rounded-full flex items-center justify-center text-indigo-400 hover:bg-indigo-100 hover:text-indigo-700">
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
        <button
            class="p-2 rounded-full flex items-center justify-center text-indigo-500 hover:bg-indigo-100 hover:text-indigo-700">
            {{-- @lang('Unlike') --}}
            @include('icons.heart-fill')
        </button>
    </form>
    @endcan

    @if ($withCount)
    {{ trans_choice('{0} no favorites|{1} :count favorite|[2,*] :count favorites', count($model->favorites), ['count' =>
    count($model->favorites)]) }}
    @endif
</div>