<nav class="sticky top-4 divide-y divide-gray-300">
    <div class="pb-8 space-y-1">
        <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
        <a href="{{ route('event.dashboard', $event )}}"
            class="{{ Request::is('event/*/dashboard') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md"
            aria-current="page">
            @include('icons.dashboard')
            <span class="ml-3 truncate">
                Dashboard
            </span>
        </a>

        <a href="{{ route('event.info', $event) }}"
            class="{{ Request::is('event/*/info') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/fire -->
            @include('icons.info')
            <span class="ml-3 truncate">
                Info
            </span>
        </a>

        <a href="{{ route('event.registrations', $event) }}"
            class="{{ Request::is('event/*/registrations') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
            @include('icons.users')
            <span class="ml-3 truncate">
                Registered
            </span>
        </a>

        <a href="{{ route('event.stats', $event) }}"
            class="{{ Request::is('event/*/stats') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/trending-up -->
            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            <span class="truncate">
                Stats
            </span>
        </a>
    </div>
</nav>