<section>
    <div class="grid grid-cols-3 gap-6 my-4">
        <div x-data="{showList:@entangle('showList')}">
            <label for="comboboxCity" class="block text-sm font-medium text-gray-700">City</label>
            <div class="relative mt-1">
                <input id="combobox" type="text" wire:model="cityName" @click="showList =! showList"
                    wire:keydown.enter="searchCityByName"
                    class="w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-12 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                    role="combobox" aria-controls="options" aria-expanded="false">
                <button type="button" @click="showList =! showList"
                    class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
                    <!-- Heroicon name: solid/selector -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <ul x-show="showList" x-cloak @click.outside="showList = false"
                    class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                    id="options" role="listbox">
                    @forelse ($cities as $c)
                    <li wire:key="{{ $loop->index }}" id="option-0" role="option" tabindex="-1"
                        class="relative cursor-default select-none py-2 pl-3 pr-9 hover:bg-indigo-600 hover:text-white">
                        <button wire:click="selectCity({{ $c->id }})" class="flex justify-between">
                            <span class="block truncate">{{ $c->name }}</span>

                            @if ($city == $c)
                            <span :class="{'active':'text-white', 'inactive':'text-indigo-600'}"
                                class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                @include('icons.check')
                            </span>
                            @endif
                        </button>
                    </li>
                    @empty
                    <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900">
                        No city found!
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>

        <div x-data="{showStyleList:@entangle('showStyleList')}">
            <label for="comboboxStyle" class="block text-sm font-medium text-gray-700">Style</label>
            <div class="relative mt-1">
                <input id="combobox" type="text" wire:model="styleName" @click="showStyleList =! showStyleList"
                    wire:keydown.enter="searchCityByName"
                    class="w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-12 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                    role="combobox" aria-controls="options" aria-expanded="false">
                <button type="button" @click="showStyleList =! showStyleList"
                    class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
                    <!-- Heroicon name: solid/selector -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <ul x-show="showStyleList" x-cloak @click.outside="showStyleList = false"
                    class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                    id="options" role="listbox">
                    @forelse ($styles as $s)
                    <li wire:key="{{ $loop->index }}" id="option-0" role="option" tabindex="-1"
                        class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-indigo-600 hover:text-white">
                        <button wire:click="selectStyle({{ $s->id }})">
                            <span class="block truncate">{{ $s->name }}</span>

                            @if ($s == $style)
                            <span :class="{'active':'text-white', 'inactive':'text-indigo-600'}"
                                class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                @include('icons.check')
                            </span>
                            @endif
                        </button>
                    </li>
                    @empty
                    <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900">
                        No city found!
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="button" wire:click="resetSchoolList"
                class="mt-6 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Reset
            </button>
        </div>
    </div>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($schools as $school)
        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
            <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('organization.view', $school) }}" class="text-gray-900 hover:text-indigo-700">
                            <h3 class="text-sm font-medium truncate">{{ $school->name }}</h3>
                        </a>
                        <span
                            class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">
                            {{ $school->status }}
                        </span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">
                        {{ implode(', ', $school->styles->pluck('name')->toArray()) }}
                    </p>
                    <p class="mt-1 text-gray-500 text-sm truncate">{{ $school->city->name }}</p>
                </div>
                <img class="w-14 h-14 bg-gray-300 rounded-lg flex-shrink-0" src="{{ $school->icon }}" alt="">
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">

                        @if ($school->facebook)
                        <a href="{{ $school->facebook }}" target="_blank"
                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                            @include('icons.social.facebook', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Facebook</span>
                        </a>
                        @else
                        <a href="mailto:{{$school->email}}"
                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                            @include('icons.email', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Email</span>
                        </a>
                        @endif
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                        @if ($school->phone)
                        <a href="tel:+1-202-555-0170"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                            <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span class="ml-3">Call</span>
                        </a>
                        @else
                        @if ($school->website)
                        <a href="{{ $school->website }}"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                            @include('icons.website', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Website</span>
                        </a>
                        @else
                        <a href="{{ $school->email }}"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                            @include('icons.email', ['style'=>'w-4 h-4 text-gray-400'])
                            <span class="ml-3">Email</span>
                        </a>
                        @endif
                        @endif

                    </div>
                </div>
            </div>
        </li>
        @empty
        No {{ $type }} found!
        @endforelse
    </ul>
    <div class="my-3 mx-3">
        {{ $schools->links()}}
    </div>
</section>