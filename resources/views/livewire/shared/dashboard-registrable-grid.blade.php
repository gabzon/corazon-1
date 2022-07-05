<section>
    <header class="rounded-t-xl space-y-4 px-4 sm:px-8 sm:pb-6 lg:pb-4 xl:px-8 xl:pb-6 dark:highlight-white/10">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-slate-900 dark:text-white capitalize">{{ Str::plural($model) }}</h2>
            <a href="{{ route('event.create', ['orgId' => $org->id]) }}"
                class="group flex items-center rounded-md bg-indigo-600 text-white text-sm font-medium pl-2 pr-3 py-2 cursor-pointer shadow-sm hover:bg-indigo-500">
                @include('icons.plus')
                New
            </a>
        </div>
        {{-- <div>
            <x-form.search-input name="search" wire:model="search" />
        </div> --}}
    </header>
    <ul
        class="bg-slate-50 p-4 sm:px-8 sm:pt-1 sm:pb-8 lg:p-4 xl:px-8 xl:pt-2 xl:pb-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4 text-sm leading-6 dark:bg-slate-900/40 dark:ring-1 dark:ring-white/5">
        @foreach ($collection as $item)
        <li
            class="group cursor-pointer rounded-md p-3 bg-white ring-1 ring-gray-200 shadow-sm hover:bg-indigo-700 hover:ring-indigo-700 hover:shadow-md dark:bg-slate-700 dark:ring-0 dark:highlight-white/10 dark:hover:bg-indigo-700">

            <dl class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center">
                <a href="{{ route($showPath, $item) }}">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-slate-900 group-hover:text-white dark:text-slate-100">
                            {{ $item->name }}
                        </h3>
                        <span class="text-xs group-hover:text-blue-200 uppercase">
                            {{ $item->start_date->format('M j') }} @ {{ $item->start_date->format('H:i') }}
                        </span>
                    </div>
                    <div>
                        <span class="group-hover:text-indigo-200">
                            <span class="capitalize font-semibold text-gray-700 group-hover:text-indigo-200">{{
                                $item->type
                                }}</span>
                            {{ implode(', ', $item->styles->pluck('name')->toArray())}}
                        </span>
                    </div>
                    <div class="flex justify-between items-center sm:mt-4 lg:mt-0 xl:mt-4">
                        <x-shared.avatar-group :model="$item" />
                        <div class="capitalize text-sm text-gray-700 group-hover:text-indigo-200">
                            {{ $item->placeName }}
                        </div>
                    </div>
                </a>
            </dl>
        </li>
        @endforeach

        <li class="flex">
            <a href="{{ route($createPath, ['orgId' => $org->id]) }}"
                class="group w-full flex flex-col items-center justify-center rounded-md border-2 border-dashed border-gray-300 text-sm leading-6 text-slate-900 font-medium py-3 cursor-pointer hover:border-indigo-700 hover:border-solid hover:bg-white hover:text-indigo-700 dark:border-slate-700 dark:text-slate-100 dark:hover:border-indigo-700 dark:hover:bg-transparent dark:hover:text-indigo-700">
                <svg width="20" height="20" fill="currentColor" class="mb-1 text-slate-400 group-hover:text-indigo-500">
                    <path
                        d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z">
                    </path>
                </svg>New Event
            </a>
        </li>
    </ul>
</section>