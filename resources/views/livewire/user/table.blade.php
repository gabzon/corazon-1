<div>
    <div class="mb-3 grid grid-cols-7 gap-6">
        <div class="col-span-1">
            <x-form.select wire:model="paginate" name="paginate" :options="[10,15,20,25,50,100]" />
        </div>
        <div class="col-span-2">
            <x-form.search-input wire:model="filterColumns.name" name="Search name" />
        </div>
        <div class="col-span-1">
            <x-form.select wire:model="filterColumns.role" name="role"
                :options="['all','admin','publisher','user','manager','instructor']" />
        </div>
        <div class="col-span-1">
            <x-form.select wire:model="filterColumns.gender" name="gender" :options="['male','female']" />
        </div>
        <div class="col-span-1">
            <x-form.select wire:model="filterColumns.organization" name="organization"
                :options="App\Models\Organization::all()" />
        </div>
        <div class="col-span-1">
            <x-form.select wire:model="filterColumns.city" name="city" :options="App\Models\city::all()" />
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
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Birthday
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Gender
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Work Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    City
                                </th>
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
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-500">{{ $user->id }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <a href="{{ route('user.show', $user) }}">
                                                <img class="h-10 w-10 rounded-full" src="{{$user->photo}}" alt="">
                                            </a>
                                        </div>
                                        <div class="ml-4">
                                            <div>
                                                <a href="{{ route('user.show', $user) }}"
                                                    class="text-sm leading-5 font-medium text-gray-900 hover:text-indigo-700">
                                                    {{$user->name}}
                                                </a>
                                                @if(auth()->user()->isAdmin())
                                                <a wire:click="impersonate({{$user->id}})" href="#"
                                                    class="text-xs text-indigo-600 hover:text-indigo-800 ml-1">Impersonate</a>
                                                @endif
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">{{$user->email}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->birthday }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->gender }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $user->mobile }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->work_status }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->city }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->role }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('user.edit', $user) }}"
                                        class="text-indigo-500 hover:text-indigo-700">edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="m-3">
            {{ $users->links() }}
        </div>
    </div>
</div>