<div x-data="{ open: @entangle('showUser'), openForm: @entangle('showForm') }">

    <div x-show="open">
        @if ($user)
        <livewire:user.slideover :user="$user" key="{{ now() }}" :orgId="$model->orgId" />
        @endif
    </div>

    @can('update', $model)
    @include('shared.user-registration-panel')
    @endcan

    <div>
        <div class="mb-3 grid grid-cols-5 gap-0 sm:gap-6 items-center">
            <div class="sm:ml-1 col-span-5 sm:col-span-2">
                <x-form.search-input wire:model="search" name="Search user by name, email, username" />
            </div>

            <div class="col-span-5 sm:col-span-1">
                <x-form.select wire:model="status" name="Status"
                    :options="['pre-registered','registered', 'invitee']" />
            </div>
            <div class="col-span-5 sm:col-span-1">
                <x-form.select wire:model="role" name="Role"
                    :options="['instructor','student', 'guest', 'assistant']" />
            </div>
            <div class="col-span-5 sm:col-span-1">
                <x-form.select wire:model="gender" name="Gender" :options="['female','male']" />
            </div>
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
                                    Updated
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
                                <td class="pl-4 pr-2 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        @can('update', $model)
                                        <button wire:click="view({{ $reg->user->id }})"
                                            class="flex items-center text-left">
                                            <x-user.avatar-username :user="$reg->user" />
                                        </button>
                                        @else
                                        <x-user.avatar-username :user="$reg->user" />
                                        @endcan

                                    </div>
                                </td>
                                <td class="px-2 py-4 text-sm whitespace-nowrap text-gray-500">
                                    <livewire:profile.user-registration-status-badge :model="$model" size="xs"
                                        :user="$reg->user" wire:key="{{ $reg->id }}" status="{{ $reg->status }}" />
                                </td>
                                <td class="px-2 py-4 text-sm whitespace-nowrap text-gray-500">
                                    {{ $reg->role }}
                                </td>
                                <td class="px-2 py-4 text-sm whitespace-nowrap text-gray-500">
                                    {{ $reg->updated_at }}
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
                                <td colspan="6" class="px-6 py-4  text-sm text-gray-500">
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
    <div x-data="{ dropdown: false }">
        @can('invite', $model)
        <button type="button" @click="dropdown = !dropdown"
            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span x-show="!dropdown">Add invitee</span>
            <span x-show="dropdown" x-cloak>@include('icons.x')</span>
        </button>
        @endcan
        <div class="-mr-1 w-full mb-2" x-show="dropdown" x-cloak>
            <livewire:shared.select-user :oids="$model->orgId" />
            <div class="my-10">&nbsp;</div>
        </div>
    </div>
</div>