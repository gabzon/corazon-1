<!-- This example requires Tailwind CSS v2.0+ -->
<div class="my-3 mx-5">
    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total members</p>
        </dt>
        <dd class="ml-16 pb-6 flex justify-between items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">{{ $organization->members->count() }}</p>
            <p class="flex items-baseline text-sm font-semibold">
                <span class="flex space-x-1 items-center text-pink-600">
                    @include('icons.female-sign')
                    <span>{{ $organization->members->where('gender','female')->count() }}</span>
                </span>
                <span class="ml-3 flex space-x-2 items-center text-blue-600">
                    @include('icons.male-sign')
                    <span>{{ $organization->members->where('gender','male')->count() }}</span>
                </span>

            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="{{ route('organization.members', $organization) }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Total
                            Subscribers stats</span></a>
                </div>
            </div>
        </dd>
    </div>
    <br>
    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
                @include('icons.courses',['style'=>'h-5 w-5 text-white'])

            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total courses</p>
        </dt>
        <dd class="ml-16 pb-6 flex items-center sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">{{ $organization->courses->count() }}</p>
            <p class="ml-3 flex items-center text-sm font-semibold space-x-4">
                <span class="flex items-center text-green-600">
                    Active {{ $organization->courses->where('status','active')->count() }}
                </span>
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="{{ route('organization.courses', $organization) }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500">
                        View all<span class="sr-only"> Total
                            Subscribers stats</span></a>
                </div>
            </div>
        </dd>
    </div>
    <br>
    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
                @include('icons.events',['style'=>'h-5 w-5 text-white'])

            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total events</p>
        </dt>
        <dd class="ml-16 pb-6 flex items-center sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">{{ $organization->events->count() }}</p>
            <p class="ml-3 flex items-center text-sm font-semibold space-x-4">
                <span class="flex items-center text-green-600">
                    Active
                    {{ $organization->events->where('status','active')->count() }}
                </span>
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="{{ route('organization.courses', $organization) }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Total
                            Subscribers stats</span></a>
                </div>
            </div>
        </dd>
    </div>
</div>