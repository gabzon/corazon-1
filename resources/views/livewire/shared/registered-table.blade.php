<div x-data="{ open: @entangle('showForm') }">
    <form x-show="open" wire:submit.prevent="save" class="mb-4">
        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-3 sm:col-span-2">
                <x-form.update-registration-status wire:model="status" />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <x-form.update-course-registration-role wire:model="role" />
            </div>
            <div class="col-span-3 sm:col-span-1 flex">
                <button @click="open = false" type="button"
                    class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @include('icons.x')
                </button>
                <button type="submit"
                    class="ml-2 text-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @include('icons.save', ['style' => 'h-4 w-4'])
                </button>
            </div>
        </div>
    </form>

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
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($inscribed as $user)
                            <tr>
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->photo }}"
                                                alt="{{ $user->name }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $user->name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ '@' . $user->username }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 text-sm text-gray-500">
                                    <livewire:profile.user-registration-status-badge :model="$model" size="small"
                                        :user="$user" wire:key="{{ $user->id }}" />
                                </td>
                                <td class="p-4 text-sm text-gray-500">
                                    {{ $user->getRegistrationRole($model) }}
                                </td>
                                <td class="p-4 text-sm">
                                    <button wire:click="update({{$user}})"
                                        class="text-indigo-500 hover:text-indigo-800 font-medium">edit</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    No people found
                                </td>
                            </tr>
                            @endforelse


                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>