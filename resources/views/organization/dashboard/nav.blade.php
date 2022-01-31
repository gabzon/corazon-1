<div class="pb-8 space-y-1">
    <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
    <a href="{{ route('organization.dashboard', $organization) }}"
        class="{{ Request::is('organization/*/dashboard') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/fire -->
        @include('icons.dashboard')
        <span class="ml-3 truncate">
            Control Panel
        </span>
    </a>
    <a href="{{ route('organization.members', $organization) }}"
        class="{{ Request::is('organization/*/members') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        @include('icons.users')
        <span class="ml-3 truncate">
            Members
        </span>
    </a>

    <a href="{{ route('organization.courses', $organization) }}"
        class="{{ Request::is('organization/*/courses') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md"
        aria-current="page">
        @include('icons.courses')
        <span class="ml-3 truncate">
            Courses
        </span>
    </a>

    <a href="{{ route('organization.events', $organization) }}"
        class="{{ Request::is('organization/*/events') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        @include('icons.events')
        <span class="ml-3 truncate">
            Events
        </span>
    </a>

    <a href="{{ route('organization.settings', $organization) }}"
        class="{{ Request::is('organization/*/settings') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/fire -->
        @include('icons.settings')
        <span class="ml-3 truncate">
            Settings
        </span>
    </a>




</div>