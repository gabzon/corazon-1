<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="py-4 px-4 sm:px-6 flex space-x-3">
        <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ $course->organization->photo }}" alt="">
        </div>
        <div class="min-w-0 flex-1">
            <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">{{ $course->organization->name }}</a>
            </p>
            <span class="text-sm text-gray-500">{{ $course->organization->shortname }}</span>
        </div>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Contact
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $course->organization->contact }}
                </dd>
            </div>
            @if ($course->organization->website)
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Website
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $course->organization->website }}
                </dd>
            </div>
            @endif

            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $course->organization->email }}
                </dd>
            </div>

            @if ($course->organization->phone)
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Phone
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $course->organization->phone }}
                </dd>
            </div>
            @endif

            @if ($course->organization->about)
            <div class="sm:col-span-2">
                <dt class="text-sm font-medium text-gray-500">
                    About
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $course->organization->about }}
                </dd>
            </div>
            @endif

            <div class="sm:col-span-2">
                <dt class="text-sm font-medium text-gray-500">
                    Social Media
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    <x-partials.social-links :model="$course->organization" />
                </dd>
            </div>
        </dl>
    </div>
</div>