<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Contact Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Information regarding the organizer or the contact information of person responsible
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">


                        <div class="grid grid-cols-5 gap-6 items-start">
                            {{--
                            <livewire:component.select2.organizations :model="$event" /> --}}
                            {{--
                            <livewire:shared.organization-select type="manager" /> --}}
                            <div class="col-span-4 sm:col-span-2">
                                <select wire:model="oid"
                                    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option default selected>Select organization</option>
                                    @foreach (\App\Models\Organization::orderBy('name','asc')->get()
                                    as
                                    $org)
                                    <option value="{{ $org->id }}">{{ $org->shortname ?? $org->name }}</option>
                                    @endforeach
                                </select>
                                <a href="{{ route('organization.create') }}"
                                    class="text-sm text-indigo-500 hover:text-indigo-800 ml-2">Create
                                    organization <span aria-hidden="true">&rarr;</span></a>
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <button
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    type="button" wire:click="addOrganization">
                                    Add
                                </button>
                            </div>

                        </div>
                        <div class="my-6">
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
                                                            City
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
                                                    @forelse ($organizations as $org)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 rounded-full overflow-hidden">
                                                                    <img src="{{ asset('images/default-logo.jpg') }}"
                                                                        alt="{{ $event->name }}">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        {{ $org->shortname ?? $org->name}}
                                                                    </div>
                                                                    <div class="text-sm text-gray-500">
                                                                        {{ $org->email }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $org->city->name }}
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                {{ $org->status }}
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                                            <button wire:click="remove({{$org->id}})"
                                                                class="text-indigo-500 hover:text-indigo-800">
                                                                remove
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="4"
                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            No organizations found! Please add an organization to this
                                                            event.
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
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <x-form.text-input wire:model="event.contact" name="event.contact" label="Contact" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="event.email" name="event.email" label="Email" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="event.phone" name="event.phone" label="Phone" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-partials.saved-confirmation />
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>