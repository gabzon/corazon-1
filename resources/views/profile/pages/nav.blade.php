<div class="pb-8 space-y-1">
    <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
    <a href="{{ route('profile.favorites.events')}}"
        class="{{ Request::is('profile/favorites/events') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md"
        aria-current="page">
        <span class="truncate">
            Events
        </span>
    </a>

    <a href="{{ route('profile.favorites.courses') }}"
        class="{{ Request::is('profile/favorites/courses') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <span class="truncate">
            Courses
        </span>
    </a>

    <a href="{{ route('profile.favorites.organizations') }}"
        class="{{ Request::is('profile/favorites/organizations') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <span class="truncate">
            Organizations
        </span>
    </a>

    <a href="{{ route('profile.favorites.lessons') }}"
        class="{{ Request::is('profile/favorites/lessons') ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
        <span class="truncate">
            Lessons
        </span>
    </a>
</div>