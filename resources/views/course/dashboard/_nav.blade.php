<div class="pb-8 space-y-1">
    <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
    <a href="{{ route('course.dashboard', $course )}}"
        class="{{ Request::is('course/*/dashboard') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md"
        aria-current="page">
        <!-- Heroicon name: outline/home -->
        <svg class="text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="truncate">
            Classes
        </span>
    </a>

    <a href="{{ route('course.info', $course) }}"
        class="{{ Request::is('course/*/info') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/fire -->
        @include('icons.info')
        <span class="ml-3 truncate">
            Info
        </span>
    </a>

    <a href="{{ route('course.students', $course) }}"
        class="{{ Request::is('course/*/students') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        @include('icons.users')
        <span class="ml-3 truncate">
            Registered
        </span>
    </a>

    @can('update', $course)
    <a href="{{ route('course.stats', $course) }}"
        class="{{ Request::is('course/*/stats') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/trending-up -->
        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
        </svg>
        <span class="truncate">
            Stats
        </span>
    </a>
    @endcan

</div>