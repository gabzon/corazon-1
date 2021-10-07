<x-admin-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ route('city.destroy', $city) }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Delete
                </a>
                <a href="{{ route('city.edit', $city) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit City
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-3 sm:mx-2 md:mx-1 lg:mx-0">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="flex items-center">
                            <div class="mr-2">
                                <img src="{{ $city->getMedia('city-emblem')->last()->getUrl() }}"
                                    alt="corazon {{ $city->name }} image" class="h-12">
                            </div>
                            <div class="">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    {{ $city->name }}
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    City details and information.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                            {{-- <div class="sm:col-span-1"> --}}
                            {{-- <dt class="text-sm font-medium text-gray-500">
                                    Slug
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->slug }}
                            </dd> --}}
                            {{-- </div> --}}

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    State/Region
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->state }}, {{ $city->region }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Zip
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->zip }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Population
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->population }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Coordenates
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$city->lat}}, {{ $city->lng }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    IATA Code
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->iataCode }}
                                </dd>
                            </div>

                            {{-- <div class="sm:col-span-1"> --}}
                            {{-- <dt class="text-sm font-medium text-gray-500">
                                    Code
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->code }}
                            </dd> --}}
                            {{-- </div> --}}

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Country
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->country }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    World region
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->world_region }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    alpha2Code
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->alpha2Code }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    alpha3Code
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->alpha3Code }}
                                </dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Description
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $city->description }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <img src="{{ $city->getMedia('city-image')->last()->getUrl() }}"
                        alt="corazon {{ $city->name }} image">
                </div>
            </div>
            <div class="my-40"></div>
        </div>
    </div>
</x-admin-layout>