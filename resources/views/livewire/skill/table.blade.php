<section>
    <div class="shadow overflow-hidden border-b border-gray-200 relative z-0 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 tracking-wider sm:rounded-lg text-left">
                        <button wire:click="sortBy('name')" class="w-full flex justify-between items-center">
                            <div class="text-xs font-medium text-gray-500 uppercase">Name</div>
                            <div class="text-gray-500">
                                <x-partials.sort-icon field="{{ $sortField}}" direction="{{ $sortDirection}}" />
                            </div>
                        </button>
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        description
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button wire:click="sortBy('difficulty')" class="w-full flex justify-between items-center">
                            <div class="text-xs font-medium text-gray-500 uppercase">Difficulty</div>
                            <div class="text-gray-500">
                                <x-partials.sort-icon field="{{ $sortField}}" direction="{{ $sortDirection}}" />
                            </div>
                        </button>
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Author
                        difficulty
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($collection as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        <a href="{{ route('skill.show', $item) }}" class="hover:text-indigo-700">{{ $item->name }}</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ Str::limit($item->description, 50) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->difficulty }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->author }}
                    </td>
                    <td class="px-2 relative">
                        <x-shared.action-list route="skill" :item="$item" />
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No skills found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="my-3 mx-4 z-0 relative">
        {{ $collection->links() }}
    </div>
</section>