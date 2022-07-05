<div>
    @if ($showLabel)
    <label for="combobox-city" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    @endif
    <div class="relative mt-1" x-data="{ open: @entangle('showDropdown') }">
        <input id="combobox-city" type="text" @click="open = true" wire:model="search" @click.outside="open = false"
            class="w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-12 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
            role="combobox" aria-controls="options" aria-expanded="false">
        <button @click="open = true" type="button"
            class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
            <!-- Heroicon name: solid/selector -->
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <ul x-show="open" x-cloak
            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
            id="options" role="listbox">
            <!--
          Combobox option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
          Active: "", Not Active: "text-gray-900"
        -->
            @forelse ($collection as $item)
            <li wire:click="selectCity({{ $item->id }})" wire:key="{{ $loop->index }}"
                class="group relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900 hover:text-white hover:bg-indigo-600"
                id="option-0" role="option" tabindex="-1">
                <div class="flex items-center">
                    <span class="ml-3 truncate">{{ $item->name }}</span>
                    <span class="ml-2 truncate text-gray-500 group-hover:text-indigo-200">
                        {{ $item->country }}
                    </span>
                </div>
                @if ($item == $city)
                <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                    @include('icons.check')
                </span>
                @endif
            </li>
            @empty
            <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-500">
                <span class="ml-3 truncate">No organizations found!</span>
            </li>
            @endforelse


            <!-- More items... -->
        </ul>
    </div>
</div>