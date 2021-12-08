<div>
    @if (!auth()->user()->isRegistered($model))
    @can('register', $model)
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="hidden" name="registrable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button type="submit" data-tippy-placement="top" data-tippy-content="Register"
            class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">
            @lang('Register')
            <span class="sr-only">Add to basket</span>
        </button>
    </form>

    @endcan
    @else
    <div class="inline-flex items-center">
        @can('unregister', $model)
        <form action="{{ route('unregister') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="registrable_type" value="{{ get_class($model) }}" />
            <input type="hidden" name="id" value="{{ $model->id }}" />
            <button id="unregister" data-tippy-placement="top" data-tippy-content="Unregister"
                class="max-w-xs flex-1 bg-gray-100 border rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-gray-500 hover:bg-red-600 hover:text-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-red-500 sm:w-full">
                @include('icons.garbage')
                <span class="ml-2">Cancel registration</span>
                <span class="sr-only">Remove from basket</span>
            </button>
        </form>
        @endcan
    </div>
    @endif

    @push('modals')
    <script>
        tippy('#register');
        tippy('#pre-registered');
        tippy('#unregister');        
    </script>
    @endpush

</div>