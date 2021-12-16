<div class="inline-flex items-center">
    @can('bookmark', $model)
    <form action="{{ route('event.bookmark') }}" method="POST">
        @csrf
        <input type="hidden" name="model" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button id="bookmark" data-tippy-placement="top" data-tippy-content="Bookmark"
            class="py-3 px-3 rounded-full flex items-center justify-center text-indigo-400 hover:bg-indigo-100 hover:text-indigo-700">
            {{-- @lang('Like') --}}
            @include('icons.bookmark-star')
            <span class="sr-only">Add to interest</span>
        </button>
    </form>
    @endcan

    @can('unbookmark', $model)
    <form action="{{ route('event.unbookmark') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="model" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button id="unbookmark" data-tippy-placement="top" data-tippy-content="Unbookmark"
            class="py-3 px-3 rounded-full flex items-center justify-center text-indigo-500 hover:bg-indigo-100 hover:text-indigo-700">
            {{-- @lang('Unlike') --}}
            @include('icons.bookmark-star-fill')
            <span class="sr-only">Remove from uninterest</span>
        </button>
    </form>
    @endcan

    @if ($withCount)
    {{ trans_choice('{0} no interested|{1} :count interested|[2,*] :count interested', count($model->interests),
    ['count' => count($model->interests)]) }}
    @endif

    @push('modals')
    <script>
        tippy('#bookmark');
    tippy('#unbookmark');
    </script>
    @endpush
</div>