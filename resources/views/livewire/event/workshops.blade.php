<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Workshops</h3>
                <p class="mt-1 text-sm text-gray-600">Add workshops to this event</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="w-full sm:w-1/3 mb-6">
                            <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                            <select id="course" name="course" wire:model="course"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('course') border-red-500 @enderror">
                                <option value="" selected default disabled>Select classes</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                            @error('course')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            <a href="{{ route('course.create') }}" class="text-sm text-indigo-500 ml-2 mt-1">
                                Add Workshop <span aria-hidden="true">&rarr;</span>
                            </a>
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
                                                        Date
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Day / Time
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Style
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse ($event->courses as $course)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        {{ $course->name }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $course->start_date->format('y-m-d') }}
                                                    </td>
                                                    <td class="px-6 py-4 w-44 text-sm text-gray-500">
                                                        <x-partials.display-day-time :course="$course" />
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ implode(', ', $course->styles->pluck('name')->toArray()) }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-end items-center">
                                                        <a href="{{ route('course.edit', $course) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">
                                                            @include('icons.pen', ['style'=> 'w-4 h-4'])
                                                        </a>
                                                        <button class="text-red-600 hover:text-red-800 ml-3"
                                                            type="button" wire:click="delete({{ $course->id }})">
                                                            @include('icons.x')
                                                        </button>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        No courses found
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
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>