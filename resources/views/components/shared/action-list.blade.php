<div class="relative flex justify-end items-center" x-data="{ showActions: false }">
    <button id="project-options-menu-0" aria-has-popup="true" type="button" @click="showActions = true"
        class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition ease-in-out duration-150">
        <!-- Heroicon name: dots-vertical -->
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
        </svg>
    </button>

    <div x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"
        class="mx-3 origin-top-right absolute z-50 right-7 -top-2 w-32 border rounded-md shadow-lg "
        x-show="showActions" @click.away="showActions =  false">
        <div class="z-10 rounded-md bg-white shadow-xs" role="menu" aria-labelledby="project-options-menu-0">
            <div class="py-1 flex mx-1">
                <a href="{{ route($route . '.show', $item) }}"
                    class="p-2 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                    @include('icons.view')
                </a>
                <a href="{{ route($route . '.edit', $item) }}"
                    class="mx-1 p-2 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                    @include('icons.edit')
                </a>
                @include('shared.delete',['model'=> $item, 'action'=> $route . '.destroy', 'type'=>'link'])
            </div>
        </div>
    </div>
</div>


{{-- px-4 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 --}}
{{-- px-4 py-2 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 --}}