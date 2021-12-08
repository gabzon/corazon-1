<div class="ml-4 inline-flex items-center">
    @can('interest', $model)
    <form action="{{ route('interest') }}" method="POST">
        @csrf
        <input type="hidden" name="interestable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button
            class="py-3 px-3 rounded-full flex items-center justify-center text-indigo-400 hover:bg-indigo-100 hover:text-indigo-700">
            {{-- @lang('Like') --}}
            @include('icons.bookmark-star')
            <span class="sr-only">Add to interest</span>
        </button>
    </form>
    @endcan

    @can('uninterest', $model)
    <form action="{{ route('uninterest') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="interestable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button
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
</div>