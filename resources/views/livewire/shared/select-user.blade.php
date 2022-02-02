<div x-data="{ open: @entangle('showDropdown') }" @click.away="open = false">
    <div class="mt-1 relative">
        <div class="flex justify-between items-center space-x-3">
            <button type="button" @click="open = !open"
                class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                <span class="flex items-center">
                    @if ($user)
                    <img src="{{ $user->photo }}" alt="" class="flex-shrink-0 h-6 w-6 rounded-full object-cover">
                    @endif
                    <span class="ml-3 block truncate">
                        {{ $user->name ?? 'Select user'}}
                    </span>
                </span>
                <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
            <button type="button" wire:click="select"
                class="inline-flex flex-shrink-0 items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                SELECT
            </button>
        </div>
        @if (session()->has('error'))
        <p class="ml-3 text-sm text-red-600 mt-1">{{ session()->get('error') }}</p>
        @endif
        <ul x-transition:leave="transition ease-in duration-100 transform" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-show="open"
            class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
            <li>
                <div class="m-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-300">
                        @include('icons.search')
                    </div>
                    <input type="search" name="search" id="search" wire:model="search"
                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md"
                        placeholder="Search by name, email or username">
                </div>
            </li>
            @forelse ($listOfUsers as $u)
            <li class="group text-gray-900 hover:text-white hover:bg-indigo-600 cursor-default select-none relative py-2 pl-3 pr-9"
                wire:click="selected({{$u->id}})">
                <div class="flex items-center">
                    <img src="{{ $u->photo }}" alt="" class="flex-shrink-0 h-6 w-6 rounded-full object-cover">
                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                    <span class="font-normal ml-3 block truncate">
                        {{ $u->name }}
                    </span>
                    <span class="ml-2 truncate text-gray-500 group-hover:text-gray-200">
                        {{ '@' . $u->username }}
                    </span>
                </div>
                @if ($user == $u)
                <span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                    <!-- Heroicon name: solid/check -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                @endif
            </li>
            @empty
            <li
                class="text-gray-900 hover:text-white hover:bg-indigo-600 cursor-default select-none relative py-2 pl-3 pr-9">
                No users found!
            </li>
            @endforelse
        </ul>


    </div>
</div>