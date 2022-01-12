<div x-data="{menu: false}" class="sm:hidden w-full pb-2">
    <button @click="menu = !menu" @click.away="menu = false"
        class="w-full flex font-medium text-gray-900 justify-between items-center mb-2">
        <span
            class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Menu</span>
        <span x-show="menu" x-cloak class="ml-2">
            @include('icons.x')
        </span>
    </button>
    <div x-show="menu" x-cloak>
        @include('course.dashboard._nav')
    </div>
</div>