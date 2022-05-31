<div>
    <div class="grid grid-cols-8 gap-6 mb-4">
        <div class="col-span-8 sm:col-span-2">
            <x-form.search-input wire:model="filterColumns.name" name="Search name" />
        </div>
        <div class="col-span-8 sm:col-span-1">
            <x-form.location-type wire:model="filterColumns.type" name="filterColumns.type" :withLabel="false" />
        </div>
        <div class="col-span-8 sm:col-span-2">
            <x-form.search-input wire:model="filterColumns.email" name="Search email" />
        </div>
        <div class="col-span-8 sm:col-span-1">
            <x-form.city-select wire:model="filterColumns.city" name="filterColumns.city" :withLabel="false" />
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Spaces
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Events
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    City
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($locations as $item)
                            <tr>
                                <td class="px-6 py-4 text-sm font-medium text-gray-500">
                                    {{ $item->id }}
                                </td>
                                <td class="px-6 py-4 break-normal text-sm font-medium text-gray-900">
                                    <a href="{{ route('location.show', $item) }}" class="hover:text-indigo-700">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 break-normal text-sm text-gray-500">
                                    {{ $item->type }}
                                </td>
                                <td class="px-6 py-4 break-normal text-sm text-gray-500 text-center">
                                    {{ $item->spaces()->count() }}
                                </td>
                                <td class="px-6 py-4 break-normal text-sm text-gray-500">
                                    {{ $item->events()->count() }}
                                </td>
                                <td class="px-6 py-4 break-normal text-sm text-gray-500">
                                    {{ $item->email }}
                                </td>
                                <td class="px-6 py-4 break-normal text-sm text-gray-500">
                                    {{ $item->city->name ?? '' }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium flex justify-end">
                                    <a href="{{ route('location.edit', $item)}}"
                                        class="text-indigo-500 hover:text-indigo-700">
                                        edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="m-3">
        {{ $locations->links() }}
    </div>

</div>