<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Roles</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Create or edit roles
                </p>

                <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>
                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="col-span-6">
                                    <x-form.text-input wire:model="role.name" name="role.name" label="Name" />
                                </div>
                                <div class="col-span-6">
                                    <x-form.slug-input name="name" />
                                </div>

                                <div class="col-span-6">
                                    <x-form.textarea wire:model="role.label" name="label" />
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <x-form.submit />
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Slug
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Label
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($roles as $role)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $role->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $role->slug }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $role->label }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button type="button" wire:click="edit({{ $role->id }})"
                                                class="text-gray-500 hover:text-indigo-800">Edit</button>
                                            <button type="button" wire:click="delete({{ $role->id }})"
                                                class="ml-3 text-gray-500 hover:text-red-600"
                                                onclick="confirm('Are you sure you want to delete this role?')">Delete</button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            No roles found.
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
                {{ $roles->links() }}
            </div>
        </div>
    </div>
</div>