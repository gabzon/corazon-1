<div x-data="{ open: @entangle('showUser') }" class="mx-3 sm:mx-0">
    <div x-show="open">
        @if ($user)
        <livewire:user.slideover :user="$user" key="{{ now() }}" :org="$org" />
        @endif
    </div>

    <div class="grid grid-cols-5 gap-1 sm:gap-6 mb-3">
        <div class="col-span-5 sm:col-span-3">
            <div class="pl-1">
                <x-form.search-input wire:model="search" name="Search by name, email, username" />
            </div>
        </div>
        <div>
            {{--
            <x-form.select wire:model="filterColumns.status" name="Status" :options="['female','male']" /> --}}
        </div>
        <div class="col-span-5 sm:col-span-1">
            <x-form.select wire:model="gender" name="Gender" :options="['female','male']" />
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
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Username
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Birthday
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone
                                </th>
                                {{-- <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Courses
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Events
                                </th> --}}
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($members as $member)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button type="button" class="flex items-center text-left"
                                        wire:click="view({{ $member->user->id }})">
                                        <x-user.avatar-username :user="$member->user" />
                                    </button>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ '@' . $member->user->username }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if ($member->user->birthday)
                                    <div class="text-sm text-gray-900">
                                        {{ $member->user->birthday->format('F d, Y') }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $member->user->DaysBeforeBirthday->diffForHumans() }}
                                    </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $member->user->mobile }}
                                </td>
                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                    14
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    23
                                </td> --}}
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $member->role }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    No members found!
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 mx-4">
        {{ $members->links() }}
    </div>

</div>