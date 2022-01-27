<section id="events-catalogue">
    <div class="text-indigo-700 bg-indigo-200 px-3 py-3 mx-3 rounded-lg">
        <div class="grid grid-cols-6 gap-1 sm:gap-6 items-center">
            <div class="col-span-6 sm:col-span-1">
                <h3 class="text-lg text-bold mt-2 inline-flex items-center">
                    @include('icons.filter')
                    <span class="ml-2">Filters:</span>
                </h3>
            </div>
            <div class="col-span-6 sm:col-span-1">
                <select id="city" wire:model="city"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All cities</option>
                    @foreach ($cities as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-6 sm:col-span-1">
                <select wire:model="styleId"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Styles</option>
                    @foreach ($styles as $s)
                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="col-span-6 sm:col-span-1">
                <select wire:model="type"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Types</option>
                    <option value="party">Party</option>
                    <option value="workshop">Workshop</option>
                    <option value="festival">Festival</option>
                </select>
            </div>
            <div class="hidden col-span-6 sm:block sm:col-span-1">
                {{-- <select wire:model="type"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Organisers</option>
                    <option value="party">Party</option>
                    <option value="workshop">Workshop</option>
                    <option value="festival">Festival</option>
                </select> --}}
            </div>
            <div class="col-span-6 sm:col-span-1">
                <div class="flex justify-end">
                    <button type="button" wire:click="resetCatalog"
                        class="mt-1 inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-10">
        <div wire:loading.flex class="flex justify-center font-medium text-lg">
            Loading...
        </div>
        <div wire:init="loadEvents" wire:loading.remove
            class="px-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @forelse ($events as $event)


            @if (! $event->is_private || (auth()->check() && $event->isRegistered(auth()->user()->id)))
            <livewire:catalogue.event-card :event="$event" wire:key="{{ $event->id }}" />
            @endif

            @empty
            <p x-data="{show: false}" x-show="show" x-cloak x-init="setTimeout( () => show = true, 1000)"
                class="py-5 text-center text-sm font-medium text-gray-900 truncate transation delay-1000">
                No events found!
            </p>
            @endforelse
        </div>
        <div wire:loading.remove class="px-6 py-2">
            {{ $events->links() }}
        </div>
    </div>
</section>