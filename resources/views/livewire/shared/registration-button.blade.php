<div>
    @if (auth()->check() && !auth()->user()->isRegistered($model))
    @can('register', $model)

    <form wire:submit.prevent="register" class="mr-3" {{-- action="{{ route('enroll') }}" method="POST" --}}>
        @csrf
        <input type="hidden" name="registrable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button type="submit" data-tippy-placement="top" data-tippy-content="Register" class="{{ $css }}">
            @lang('Register')
        </button>
    </form>
    @endcan

    @else
    <div class="inline-flex items-center">
        @can('unregister', $model)

        {{-- {{ auth()->user()->getEventRegistrationStatus($event) }} --}}
        <div class="mr-2">
            <livewire:profile.user-registration-status-badge :model="$model" size="{{ $size }}" />
        </div>

        @if (auth()->user()->registrationIs($model, 'pre-registered'))

        <form wire:submit.prevent="unregister" {{-- action="{{ route('unenroll') }}" method="POST" --}}>
            @csrf
            @method('DELETE')
            <input type="hidden" name="registrable_type" value="{{ get_class($model) }}" />
            <input type="hidden" name="id" value="{{ $model->id }}" />
            <button id="unregister" data-tippy-placement="top" data-tippy-content="Cancel registration"
                class="max-w-xs flex-1 rounded-full p-2 flex items-center justify-center text-base font-medium text-gray-500 hover:bg-red-600 hover:text-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-red-500 sm:w-full">
                @include('icons.garbage')
            </button>
        </form>
        @endif

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