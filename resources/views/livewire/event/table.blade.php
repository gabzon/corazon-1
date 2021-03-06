<div>
    <div class="grid grid-cols-10 gap-1 sm:gap-6 items-center mb-4">
        <div class="col-span-10 sm:col-span-3">
            <x-form.search-input wire:model="filterColumns.name" name="Search event name" />
        </div>
        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="filterColumns.type" name="type"
                :options="['party','festival','workshop', 'bootcamp', 'concernt']" />
        </div>
        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="style" name="style" :options="\App\Models\Style::has('events')->get()" />
        </div>
        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="filterColumns.date" name="date"
                :options="['january','february','march', 'april', 'may','june','july','august','september','october','november','december']" />
        </div>

        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="filterColumns.city" name="city"
                :options="\App\Models\City::has('events')->get()" />
        </div>

        <div class="col-span-10 sm:col-span-1">
            <x-form.select name="organizer" :options="\App\Models\Organization::all()" />
        </div>

        <div class="col-span-10 sm:col-span-1">
            <x-form.select wire:model="filterColumns.status" name="status"
                :options="[ 'active', 'finished', 'draft','review', 'soon','canceled', 'postpone']" />
        </div>

        <div class="col-span-8 sm:col-span-1">
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input id="is_recurrent" name="is_recurrent" type="checkbox" wire:model="filterColumns.is_recurrent"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-500">Is recurrent</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full">
                <div class="shadow overflow-hidden border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Style
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    City
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Organizer(s)
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Recur.
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($events as $event)
                            <tr>
                                <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $event->id }}
                                </td>
                                <td class="pr-6 py-4 truncate">
                                    <a href="{{ route('event.show', $event) }}"
                                        class="text-sm font-medium text-gray-900 hover:text-indigo-600">
                                        {{ $event->name }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-left">
                                    {{ $event->type }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <ul>
                                        @foreach ($event->styles as $s)
                                        <li>{{ $s->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                    {{ $event->start_date->format('M d, Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                    {{ $event->city->name ?? '' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <ul>
                                        @foreach ($event->organizations as $organizer)
                                        <li>{{ $organizer->shortname ?? $organizer->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <x-shared.status-badge status="{{ $event->status }}" />
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $event->is_recurrent ? 'yes':'' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="{{ route('event.edit', $event) }}"
                                        class="text-indigo-500 hover:text-indigo-700">
                                        edit
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                    No events found!
                                    <a href="{{ route('event.create') }}"
                                        class="text-indigo-600 hover:text-indigo-700 hover:underline">Add
                                        event</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="my-3 mx-4">
            {{ $events->links() }}
        </div>
    </div>
</div>