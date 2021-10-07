<div>
    {{-- <h3 class="font-medium text-gray-900">Social media</h3> --}}
    <div class="inline-flex items-center space-x-4 mt-2">
        @if ($model->facebook)
        <a href="{{ $model->facebook }}" target="_blank"
            class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
            @include('icons/social/facebook')
        </a>
        @endif

        @if ($model->twitter)
        <a href="{{ $model->twitter }}" target="_blank"
            class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
            @include('icons/social/twitter')
        </a>
        @endif

        @if ($model->instagram)
        <a href="{{ $model->instagram }}" target="_blank"
            class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
            @include('icons/social/instagram')
        </a>
        @endif

        @if ($model->youtube)
        <a href="{{ $model->youtube }}" target="_blank"
            class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
            @include('icons/social/youtube')
        </a>
        @endif

        @if ($model->tiktok)
        <a href="{{ $model->tiktok }}" target="_blank"
            class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
            @include('icons/social/tiktok')
        </a>
        @endif

        @if ($model->website)
        <a href="{{ $model->website }}" target="_blank"
            class="bg-indigo-600 p-2 rounded-full text-white hover:bg-indigo-800">
            @include('icons/website')
        </a>
        @endif
    </div>
</div>