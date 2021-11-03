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
                                Style
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Day
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Level
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                School/Organization
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                City
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        <tr class="border-t">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.search-input wire:model="search" name="search" />
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.select wire:model="style" name="style"
                                    :options="\App\Models\Style::has('courses')->get()" />
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.select name="day" wire:model="day"
                                    :options="[ 'Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday', 'Saturday','Sunday']" />
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.select wire:model="level" name="level"
                                    :options="[ 'Open Level', 'Beginner', 'Intermediate','Advanced', 'Master']" />
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.select name="teacher" :options="\App\Models\User::all()" />
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.select name="status" wire:model="status"
                                    :options="[ 'active', 'draft', 'review','soon', 'finished','canceled', 'postponed']" />
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <x-form.select name="City" :options="\App\Models\City::has('courses')->get()" />
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($courses as $course)
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <a href="{{ route('course.show', $course) }}"
                                    class="text-sm font-medium text-gray-900 hover:text-indigo-600">
                                    {{ $course->name }}
                                </a>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                <x-shared.styles-list :list="$course->styles" />
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                <x-partials.days-of-week :class="$course" />
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $course->level }}
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $course->organization->name }}
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500 ">
                                <x-shared.status-badge status="{{ $course->status }}" />
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $course->city->name }}
                            </td>
                            <td class="px-6 py-4 flex justify-end">
                                <a href="{{ route('course.edit', $course) }}"
                                    class="text-sm font-medium text-indigo-500 hover:text-indigo-700">
                                    {{-- @include('icons.pencil') --}}
                                    edit
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                No courses found!
                                <a href="{{ route('course.create') }}"
                                    class="text-indigo-600 hover:text-indigo-700 hover:underline">Add
                                    course</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="my-3 mx-4">
        {{ $courses->links() }}
    </div>
</div>