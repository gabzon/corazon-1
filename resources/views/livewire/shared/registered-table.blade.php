<div x-data="{ open: @entangle('showForm') }">

    @can('update', $model)
    @include('shared.user-registration-panel')
    @endcan

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Datetime
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($inscribed as $reg)
                            <tr>
                                <td class="pl-4 pr-2 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                src="{{ $reg->user->photo }}" alt="{{ $reg->user->name }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $reg->user->name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ '@' . $reg->user->username }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-2 py-4 text-sm whitespace-nowrap text-gray-500">
                                    <livewire:profile.user-registration-status-badge :model="$model" size="xs"
                                        :user="$reg->user" wire:key="{{ $reg->id }}" />
                                </td>
                                <td class="px-2 py-4 text-sm text-gray-500">
                                    {{ $reg->role }}
                                </td>
                                <td class="px-2 py-4 text-sm text-gray-500">
                                    {{ $reg->created_at }}
                                </td>
                                <td class="pr-4 pl-2 py-4 text-sm">
                                    @can('update', $model)
                                    <button wire:click="update({{$reg}})"
                                        class="text-indigo-500 hover:text-indigo-800 font-medium">
                                        @include('icons.pen')
                                    </button>
                                    @endcan
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4  text-sm text-gray-500">
                                    No people found
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>