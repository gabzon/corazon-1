<div>
    @if ($photos->last() != null)
    <a data-fslightbox href="{{$photos[0]->getUrl() }}" data-type="image"
        class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        @include('icons.images')
        <span class="ml-2">{{ $label ?? 'Gallery' }}</span>

        @for ($i = 1; $i < (count($photos)); $i++) <a data-fslightbox href="{{ $photos[$i]->getUrl() }}"
            data-type="image" style="display: none"></a>
    @endfor
    </a>
    @endif
</div>