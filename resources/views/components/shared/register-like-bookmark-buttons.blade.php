<div>
    @guest
    @if ($model->canRegister())
    <div class="mt-1 pb-3 flex items-center space-x-1">
        <div class="inline-flex items-center">
            <a href="{{ route('login') }}"
                class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">
                Login to enroll
            </a>
            <a href="{{ route('register') }}" class="ml-2 text-sm font-medium text-gray-500 hover:text-indigo-700">
                or create an account <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
    </div>
    @else
    @if ($model->registration_url)
    <a href="{{ $model->registration_url }}" target="_blank"
        class="flex justify-center items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Registration
    </a>
    @endif
    @endif

    @endguest

    @auth
    <div class="mt-1 pb-3 flex items-center space-x-1">
        @if ($model->canRegister())
        <livewire:shared.registration-button :model="$model" size="{{ $size }}" />
        @else
        @if ($model->registration_url)
        <a href="{{ $model->registration_url }}" target="_blank"
            class=" flex justify-center items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Registration
        </a>
        @endif
        @endif
        <livewire:shared.bookmark :model="$model" />
        <livewire:shared.favorite-button :model="$model" />
    </div>
    @endauth
</div>