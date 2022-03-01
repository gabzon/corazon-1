<div>
    <div class="grid grid-cols-10 gap-1 sm:gap-6 mb-4 px-3 sm:px-0">
        <div class="col-span-10 sm:col-span-2">
            <x-form.search-input wire:model="filterColumns.name" name="Search name" />
        </div>
        <div class="col-span-10 sm:col-span-2">
            <x-form.search-input wire:model="filterColumns.contact" name="Search contact" />
        </div>
        <div class="col-span-10 sm:col-span-2">
            <x-form.search-input wire:model="filterColumns.email" name="Search email" />
        </div>
        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="filterColumns.status" name="Status"
                :options="['active','inactive','standby','closed','open']" />
        </div>
        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="filterColumns.type" name="Type"
                :options="['school','business','organizer','partner','association']" />
        </div>
        <div class="col-span-8 sm:col-span-1">
            <x-form.city-select wire:model="filterColumns.city" name="filterColumns.city" :withLabel="false" />
        </div>
    </div>
    <div class="flex flex-col px-3 sm:px-0">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Contact
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    City
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Country
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($collection as $item)
                            <tr>
                                <td class="px-6 py-4 break-normal text-sm font-medium text-gray-900">
                                    <a href="{{ route('organization.view', $item) }}" class="hover:text-indigo-600">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item->contact }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item->city->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item->city->country }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item->status }}
                                </td>
                                <td class="px-3 py-4 flex justify-end space-x-2">
                                    <a href="{{ route('organization.show', $item) }}"
                                        class="text-gray-400 hover:text-indigo-600">
                                        @include('icons.view')
                                    </a>
                                    <a href="{{ route('organization.members', $item) }}"
                                        class="text-gray-400 hover:text-indigo-600">
                                        @include('icons.dashboard')
                                    </a>
                                    <a href="{{ route('organization.edit', $item) }}"
                                        class="text-gray-400 hover:text-indigo-600">
                                        @include('icons.pen')
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
    <div class="py-3 px-4">
        {{ $collection->links() }}
    </div>
</div>