<div class="">
    <h3 class="ml-3 font-medium text-md text-gray-900">
        Courses
    </h3>
    <div class="flex flex-col mt-1">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Course
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Day
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
                            @forelse ($courses as $c)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $c->course->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    <x-partials.days-of-week :class="$c->course" />
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $c->role }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <livewire:profile.user-registration-status-badge :model="$c->course" size="xs"
                                        :user="$c->user" wire:key="{{ $c->id }}" status="{{ $c->status }}" />
                                </td>
                            </tr>
                            @empty

                            @endforelse


                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>