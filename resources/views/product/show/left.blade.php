<div class="mt-10 lg:mt-0 lg:col-start-2 lg:row-span-2 lg:self-center">
    @if ($product->video)
    <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden mb-3">
        {!! $product->video !!}
    </div>
    @else
    <div class="mb-2 aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
        <img src="{{ $product->getFirstMediaUrl('products') }}"
            alt="Light green canvas bag with black straps, handle, front zipper pouch, and drawstring top."
            class="w-full h-full object-center object-cover">
    </div>
    @endif
</div>

<x-shared.photo-gallery :photos="$product->getMedia('products')" />