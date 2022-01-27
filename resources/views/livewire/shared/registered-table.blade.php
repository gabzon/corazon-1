<div x-data="{ open: @entangle('showForm') }">

    @can('update', $model)
    @include('shared.user-registration-panel')
    @endcan

    <div x-data="{ dropdown: false }">
        <div class="mb-3 flex justify-between items-center">
            <x-form.search-input wire:model="search" name="Search user" />
            <div>
                @can('invite', $model)
                <x-ui.button @click="dropdown = !dropdown" route="#" css="mt-2">
                    <span x-show="!dropdown">Add invitee</span>
                    <span x-show="dropdown" x-cloak>Close</span>
                </x-ui.button>
                @endcan
            </div>
        </div>
        <div class="-mr-1 w-full mb-2" x-show="dropdown" x-cloak>
            <livewire:shared.user-select wire:key="instructor" />
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
                                @can('update', $model)
                                <th></th>
                                <th></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($inscribed as $reg)
                            <tr>
                                <td class="pl-4 pr-2 py-4">
                                    <div class="flex items-center">
                                        <x-user.avatar-username :user="$reg->user" />
                                    </div>
                                </td>
                                <td class="px-2 py-4 text-sm whitespace-nowrap text-gray-500">
                                    <livewire:profile.user-registration-status-badge :model="$model" size="xs"
                                        :user="$reg->user" wire:key="{{ $reg->id }}" status="{{ $reg->status }}" />
                                </td>
                                <td class="px-2 py-4 text-sm text-gray-500">
                                    {{ $reg->role }}
                                </td>
                                <td class="px-2 py-4 text-sm text-gray-500">
                                    {{ $reg->created_at }}
                                </td>
                                @can('update', $model)
                                <td class="py-4 text-sm">
                                    @if ($reg->comments)
                                    <span class="text-indigo-500">@include('icons.chat-fill')</span>
                                    @endif
                                </td>
                                <td class="pr-4 py-4 text-sm text-right">
                                    <button wire:click="update({{$reg}})"
                                        class="text-indigo-500 hover:text-indigo-800 font-medium">
                                        @include('icons.pen')
                                    </button>
                                </td>
                                @endcan
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
    <div class="mx-4 my-3">
        {{ $inscribed->links() }}
    </div>
</div>