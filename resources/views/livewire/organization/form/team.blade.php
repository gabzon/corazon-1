<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Team</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Add team members to your organization
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div>
                            <livewire:shared.user-select wire:key="instructor" />
                        </div>

                        @if ($user)
                        <div class="mb-2">
                            <div class="mb-4">
                                <x-user.avatar-username :user="$user" />
                            </div>
                            <fieldset class="space-y-5">
                                <legend class="font-medium">Team role</legend>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="instructor" wire:model.defer="roles"
                                            aria-describedby="instructor-description" value="instructor" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="instructor" class="font-medium text-gray-700">Instructor</label>
                                        <span id="instructor-description" class="text-gray-500">
                                            can create and manage classes.
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="organizer" wire:model.defer="roles"
                                            aria-describedby="organizer-description" value="organizer" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="organizer" class="font-medium text-gray-700">Organizer</label>
                                        <span id="organizer-description" class="text-gray-500">
                                            can manage events and classes
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="dj" wire:model.defer="roles" aria-describedby="dj-description"
                                            value="dj" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="dj" class="font-medium text-gray-700">DJ</label>
                                        <span id="dj-description" class="text-gray-500">
                                            can create events
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="bouncer" wire:model.defer="roles"
                                            aria-describedby="bouncer-description" value="bouncer" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="bouncer" class="font-medium text-gray-700">Bouncer</label>
                                        <span id="bouncer-description" class="text-gray-500">
                                            can check validate registrations
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="publisher" wire:model.defer="roles"
                                            aria-describedby="publisher-description" value="publisher" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="publisher" class="font-medium text-gray-700">Publisher</label>
                                        <span id="publisher-description" class="text-gray-500">
                                            can create courses and events.
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="assistant" wire:model.defer="roles"
                                            aria-describedby="assistant-description" value="assistant" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="assistant" class="font-medium text-gray-700">Assistant</label>
                                        <span id="assistant-description" class="text-gray-500">
                                            can create courses and events.
                                        </span>
                                    </div>
                                </div>
                            </fieldset>
                            @error('user')
                            <span class="text-sm text-red-500"> {{ $message }} </span>
                            @enderror
                            @error('roles')
                            <span class="text-sm text-red-500"> {{ $message }} </span>
                            @enderror
                        </div>
                        @endif


                        <div class="flex flex-col mt-3">
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
                                                        Role
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse ($team as $member)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <x-user.avatar-username :user="$member" />
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm text-gray-500">
                                                        <ul>
                                                            @foreach ($member->rolesInOrganization($org->id) as $item)
                                                            <li class="flex justify-between">
                                                                {{ $item->role }}
                                                                <button type="button"
                                                                    class="text-indigo-600 hover:text-indigo-900"
                                                                    wire:click="remove({{$member->id}}, '{{ $item->role }}')">
                                                                    remove
                                                                </button>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="4"
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Add instructor to this organization
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
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>