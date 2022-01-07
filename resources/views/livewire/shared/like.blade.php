<div class="ml-4 inline-flex items-center">
    @can('like', $model)

    <form wire:submit.prevent="like" {{-- action="{{ route('like') }}" method="POST" --}}>
        @csrf
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button
            class="p-2 rounded-full flex items-center justify-center text-indigo-400 hover:bg-indigo-100 hover:text-indigo-700">
            {{-- @lang('Like') --}}
            @include('icons.heart')
            <span class="sr-only">Add to favorites</span>
        </button>
    </form>
    @endcan

    @can('unlike', $model)
    <form wire:submit.prevent="unlike" {{-- action="{{ route('unlike') }}" method="POST" --}}>
        @csrf
        @method('DELETE')
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button
            class="p-2 rounded-full flex items-center justify-center text-indigo-500 hover:bg-indigo-100 hover:text-indigo-700">
            {{-- @lang('Unlike') --}}
            @include('icons.heart-fill')
            <span class="sr-only">Remove from favorites</span>
        </button>
    </form>
    @endcan

    @if ($withCount)
    {{ trans_choice('{0} no like|{1} :count like|[2,*] :count likes', count($model->likes), ['count' =>
    count($model->likes)]) }}
    @endif
</div>