@can('update', $course)
<div x-data="{menu: false}" class="sm:hidden w-full">
    <button @click="menu = !menu" @click.away="menu = false"
        class="w-full inline-flex items-center px-2.5 py-1.5 border border-gray-300 font-medium shadow-sm text-xs rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2 justify-between">
        Menu
        <div x-show="!menu">@include('icons.arrow-down')</div>
        <div x-show="menu">@include('icons.arrow-up')</div>
    </button>
    <div x-show="menu" x-cloak>
        @include('course.dashboard._nav')
    </div>
</div>
@endcan