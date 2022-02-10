<div>
    @can('bookmark', $model)
    <div class="inline-flex items-center">

        <form wire:submit.prevent="bookmark" {{-- action="{{ route('bookmark') }}" method="POST" --}}>
            @csrf
            <input type="hidden" name="bookmarkable_type" value="{{ get_class($model) }}" />
            <input type="hidden" name="id" value="{{ $model->id }}" />
            <button id="bookmark" data-tippy-placement="top" data-tippy-content="Bookmark"
                class="p-2 flex items-center justify-center text-gray-500 bg-gray-100 hover:bg-indigo-100 hover:text-indigo-700 rounded-full">
                {{-- @lang('Like') --}}
                @include('icons.bookmark-star')
            </button>
        </form>
        @if ($withCount)
        {{ trans_choice('{0} no interested|{1} :count interested|[2,*] :count interested', count($model->bookmarks),
        ['count' => count($model->bookmarks)]) }}
        @endif
    </div>
    @endcan

    @can('unbookmark', $model)
    <div class="inline-flex items-center">
        <form wire:submit.prevent="unbookmark" {{-- action="{{ route('unbookmark') }}" method="POST" --}}>
            @csrf
            @method('DELETE')
            <input type="hidden" name="bookmarkable_type" value="{{ get_class($model) }}" />
            <input type="hidden" name="id" value="{{ $model->id }}" />
            <button id="unbookmark" data-tippy-placement="top" data-tippy-content="Unbookmark"
                class="p-2 flex items-center justify-center text-indigo-600 bg-indigo-100 hover:bg-gray-100 hover:text-gray-500 rounded-full">
                {{-- @lang('Unlike') --}}
                @include('icons.bookmark-star-fill')
            </button>
        </form>
        @if ($withCount)
        {{ trans_choice('{0} no interested|{1} :count interested|[2,*] :count interested', count($model->bookmarks),
        ['count' => count($model->bookmarks)]) }}
        @endif
    </div>
    @endcan

    @push('modals')
    <script>
        tippy('#bookmark');
        tippy('#unbookmark');
    </script>
    @endpush
</div>