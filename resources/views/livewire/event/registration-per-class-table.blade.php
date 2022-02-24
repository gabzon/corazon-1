<div x-data="{ open: @entangle('showUser'), openForm: @entangle('showForm') }">
    <div x-show="open">
        @if ($user)
        <livewire:user.slideover :user="$user" key="{{ now() }}" :orgId="$event->orgId" />
        @endif
    </div>


    @can('update', $event)
    @if ($user)
    <div x-cloak x-show="openForm">
        <livewire:shared.user-registration-panel :user="$user" wire:key="{{ $user->id }}" :reg="$reg" />
    </div>
    @endif
    @endcan

    <header class="mb-3 grid grid-cols-5 gap-0 sm:gap-6 items-center">

        <div class="sm:ml-1 col-span-5 sm:col-span-2">
            <x-form.search-input wire:model="search" name="Search user by name, email, username" />
        </div>

        <div class="col-span-5 sm:col-span-1">
            <x-form.select wire:model="status" name="Status" :options="['pre-registered','registered', 'invitee']" />
        </div>
        <div class="col-span-5 sm:col-span-1">
            <x-form.select wire:model="role" name="Role" :options="['instructor','student', 'guest', 'assistant']" />
        </div>
        <div class="col-span-5 sm:col-span-1">
            <x-form.select wire:model="gender" name="Gender" :options="['female','male']" />
        </div>

    </header>


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
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Event Status
                                </th>
                                @foreach ($event->courses as $class)
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ $class->name }}
                                    <span class="text-gray-900 max-w-xs">
                                        <x-partials.display-day-time :course="$class" />
                                    </span>
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($registrations as $reg)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    @can('update', $event)
                                    <button wire:click="view({{ $reg->user->id }})" class="flex items-center text-left">
                                        <x-user.avatar-username :user="$reg->user" />
                                    </button>
                                    @else
                                    <x-user.avatar-username :user="$reg->user" />
                                    @endcan
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @can('update', $event)
                                    <button type="button" wire:click="updateEventRegistration({{$reg}})">
                                        <livewire:profile.user-registration-status-badge :model="$event" size="xs"
                                            :user="$reg->user" wire:key="{{ $reg->id }}"
                                            status="{{ $reg->user->getRegistrationStatus($event) }}" />
                                    </button>
                                    @else
                                    <livewire:profile.user-registration-status-badge :model="$event" size="xs"
                                        :user="$reg->user" wire:key="{{ $reg->id }}"
                                        status="{{ $reg->user->getRegistrationStatus($event) }}" />
                                    @endcan
                                </td>
                                @foreach ($event->courses as $class)
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if ($reg->user->isRegistered($class))
                                    @can('update', $event)
                                    <button type="button"
                                        wire:click="updateClassRegistration({{ $class }}, {{ $reg->user }})">
                                        <livewire:profile.user-registration-status-badge :model="$class" size="xs"
                                            :user="$reg->user" wire:key="{{ $reg->id }}"
                                            status="{{ $reg->user->getRegistrationStatus($class) }}" />
                                    </button>
                                    @else
                                    <livewire:profile.user-registration-status-badge :model="$class" size="xs"
                                        :user="$reg->user" wire:key="{{ $reg->id }}"
                                        status="{{ $reg->user->getRegistrationStatus($class) }}" />
                                    @endcan
                                    @else
                                    Not registered
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>