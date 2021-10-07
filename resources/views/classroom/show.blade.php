<x-admin-layout>
    <x-slot name="css">
    </x-slot>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    {{ $classroom->name }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <a href="{{ route('classroom.edit', $classroom) }}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm
                font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6 sm:py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-3 sm:mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                <div>
                    <div class="px-4 py-5 sm:px-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    {{ $classroom->name }}
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    {{ $classroom->location->name }}
                                </p>
                            </div>
                            <div>
                                <x-shared.photo-gallery :photos="$photos" />
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Slug
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->slug }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Square Meters
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->m2 }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Capacity
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->capacity }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Limit of couples
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->limit_couples }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Price per hour
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->price_hour }} {{ $classroom->currency }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Price per month
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->price_month }} {{ $classroom->currency }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Dance shoes?
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->dance_shoes == '1' ? 'Required' : 'Not required' }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Has bar?
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->has_bar == '1' ? 'Yes' : 'No' }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Floor type
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->floor_type }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Mirror type
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->mirror_type }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Color
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->color }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Created by
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->user->name }}
                                </dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Description
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $classroom->description }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="my-32"></div>
            </div>
        </div>
    </div>
    @push('scripts')

    @endpush
</x-admin-layout>