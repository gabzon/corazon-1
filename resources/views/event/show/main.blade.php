<div class="px-4 sm:px-0" x-data="{ tab: 'classes' }">
    <div class="sm:hidden">
        <label for="question-tabs" class="sr-only">Select a tab</label>
        <select id="question-tabs"
            class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
            <option selected>Classes</option>

            <option>Description</option>

            <option>Stats</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
            <a href="#"
                :class="{ 'text-gray-900' : tab == 'classes', 'text-gray-500 hover:text-gray-700': tab == 'classes' }"
                x-on:click.prevent="tab = 'classes'"
                class="rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Classes</span>
                <span aria-hidden="true" :class="{ 'bg-indigo-500':tab == 'classes'}"
                    class="absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>

            <a href="#" x-on:click.prevent="tab = 'description'"
                class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Description</span>
                <span aria-hidden="true" :class="{ 'bg-indigo-500':tab == 'description'}"
                    class="absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>

            <a href="#" x-on:click.prevent="tab = 'stats'"
                class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Stats</span>
                <span aria-hidden="true" :class="{ 'bg-indigo-500':tab == 'stats'}"
                    class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>
        </nav>
    </div>

    <div x-show="tab === 'classes'">
        {{-- @include('event.show.classes') --}}
    </div>

    <div x-show="tab === 'description'">
        @include('event.show.description')
    </div>

    <div x-show="tab === 'stats'">
        @include('event.show.stats')
    </div>
</div>