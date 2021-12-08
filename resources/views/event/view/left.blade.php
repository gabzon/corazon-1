<div x-data="{ tab: 'cover' }">

    <div class="w-full aspect-h-1">
        <!-- Tab panel, show/hide based on tab state. -->
        <div x-show="tab === 'cover'" id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
            <img src="{{ $event->thumbnail ?? asset('images/defaults/event.jpg') }}"
                alt="Angled front view with bag zipped and handles upright."
                class="w-full object-center object-cover rounded-lg">
        </div>

        @if ($event->video)
        <div x-show="tab === 'video'" id="tabs-2-panel-2" aria-labelledby="tabs-2-tab-2" role="tabpanel" tabindex="1">
            <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
                {!! $event->video !!}
            </div>
        </div>
        @endif
    </div>

    @if ($event->video)
    <!-- Image selector -->
    <div class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none">
        <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
            <button id="tabs-1-tab-1" x-on:click.prevent="tab = 'cover'"
                class="relative h-24 bg-indigo-100 rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-indigo-200 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50"
                aria-controls="tabs-1-panel-1" role="tab" type="button">
                <span class="sr-only">
                    Angled view
                </span>
                <span class="absolute inset-0 rounded-md overflow-hidden">
                    @if ($event->getMedia('events')->last() != null)
                    <img src="{{ $event->getMedia('events')->last()->getUrl('thumb') }}" alt=""
                        class="w-full h-full object-center object-cover">
                    @endif
                </span>
                <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                <span :class="{ 'ring-indigo-500': tab === 'cover' }"
                    class="ring-transparent absolute inset-0 rounded-md ring-2 ring-offset-2 pointer-events-none"
                    aria-hidden="true"></span>
            </button>


            <button id="tabs-2-tab-2" x-on:click.prevent="tab = 'video'"
                class="relative h-24 bg-white rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50"
                aria-controls="tabs-1-panel-1" role="tab" type="button">
                <span class="sr-only">
                    Angled view
                </span>
                <span class="absolute inset-0 rounded-md overflow-hidden">
                    <img src="https://img.youtube.com/vi/{{ $event->youtube_id_from_embed }}/0.jpg" alt=""
                        class="w-full h-full object-center object-cover">
                </span>
                <!-- Selected: "", Not Selected: "ring-transparent" -->
                <span :class="{ 'ring-indigo-500': tab === 'video' }"
                    class="ring-transparent absolute inset-0 rounded-md ring-2 ring-offset-2 pointer-events-none"
                    aria-hidden="true"></span>
            </button>


            <!-- More images... -->
        </div>
    </div>
    @endif
</div>