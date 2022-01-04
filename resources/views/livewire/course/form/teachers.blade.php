<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Instructors</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Add one or many instructors to this course
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="w-full sm:w-2/3 md:w-1/2">
                            <select wire:model="instructor"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="" selected default disabled>Select instructor</option>
                                @foreach ($course->organization->teachers as $instructor)
                                <option value="{{ $instructor->id }}">
                                    {{ $instructor->name }}
                                </option>
                                @endforeach
                            </select>
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
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse ($instructors as $instructor)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full object-cover"
                                                                    src="{{ $instructor->photo }}""
                                                                    alt="">
                                                            </div>
                                                            <div class=" ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $instructor->name }}
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    {{ $instructor->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <button type="button"
                                                            class="text-indigo-600 hover:text-indigo-900"
                                                            wire:click="remove({{$instructor->id}})">
                                                            remove
                                                        </button>
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