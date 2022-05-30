<section id="couses-catalogue">
    <div class="text-indigo-700 bg-indigo-200 px-3 py-3 mx-3 rounded-md">
        <div class="grid grid-cols-8 gap-1 sm:gap-6 items-center">
            <div class="col-span-8 sm:col-span-1">
                <h3 class="text-lg text-bold mt-2 inline-flex items-center">
                    @include('icons.filter')
                    <span class="ml-2">Filters:</span>
                </h3>
            </div>
            <div class="col-span-8 sm:col-span-1">
                @if ($showCity)
                <select id="city" wire:model="city"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All cities</option>
                    @foreach ($cities as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
                @endif
            </div>
            <div class="col-span-8 sm:col-span-1">
                <select wire:model="styleId"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Styles</option>
                    @foreach ($styles as $s)
                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-8 sm:col-span-1">
                <select wire:model="school"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Schools</option>
                    @foreach ($schools as $o)
                    <option value="{{ $o->id }}">{{ $o->shortname ?? $o->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-8 sm:col-span-1">
                <select id="level" wire:model="level"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All levels</option>
                    <option value="open">Open Level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>
            <div class="col-span-8 sm:col-span-1">
                <select id="day" wire:model="day"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Days</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="saturday">Saturday</option>
                    <option value="sunday">Sunday</option>
                </select>
            </div>
            <div class="col-span-8 sm:col-span-1">
                {{-- <select id="day" wire:model="neighborhood"
                    class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected>All Neighborhood</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="saturday">Saturday</option>
                    <option value="sunday">Sunday</option>
                </select> --}}
            </div>
            <div class="col-span-8 sm:col-span-1">
                <div class="flex justify-end">
                    <button type="button" wire:click="resetCatalog"
                        class="mt-1 inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-10">
        <div class="max-w-full mx-auto">
            <div wire:loading.flex class="flex justify-center font-medium text-lg">
                Loading...
            </div>
            <div wire:init="loadCourses" wire:loading.remove
                class="px-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                @forelse ($courses as $class)

                @if (! $class->is_private || (auth()->check() && $class->isRegistered(auth()->user()->id)))
                <livewire:catalogue.course-card :class="$class" :key="$class->id" />
                @endif

                @empty
                <p x-data="{show: false}" x-show="show" x-cloak x-init="setTimeout( () => show = true, 1000)"
                    class="py-5 text-center text-sm font-medium text-gray-900 truncate transation delay-1000">
                    No courses found
                </p>
                @endforelse
            </div>
            <div wire:loading.remove class="px-8">
                {{ $courses->links() }}
            </div>
        </div>
    </div>
</section>