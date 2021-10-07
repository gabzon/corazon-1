<div>
    <h2 id="gallery-heading" class="sr-only">Recently viewed</h2>
    <div class="max-w-5xl mx-auto">
        <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
            {!! $organization->video !!}
        </div>
    </div>
    <div class="max-w-3xl mx-auto mt-4">
        <h3 class="font-medium text-gray-900">About</h3>
        <div class="mt-2 flex items-center justify-between">
            <p class="text-sm text-gray-500 italic">{{ $organization->about }}</p>
        </div>
    </div>


</div>