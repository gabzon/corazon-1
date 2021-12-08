<div class="px-4 sm:px-0" x-data="{ tab: 'classes' }">
    <div class="sm:hidden">
        <label for="question-tabs" class="sr-only">Select a tab</label>
        <select id="question-tabs"
            class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
            <option selected>Classes</option>

            <option>Description</option>

            <option>Stats</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="shadow rounded-t-lg overflow-hidden">
            <div class="bg-white p-6">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-5">
                        <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                            <p class="text-sm font-medium text-gray-600">
                                {{ $course->start_date->format('d M Y') }} - {{ $course->end_date->format('d M Y') }}
                            </p>
                            <p class="text-xl font-bold text-gray-900 sm:text-2xl">
                                {{ $course->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-600 capitalize">
                                {{ $course->type }}: {{ implode(', ', $course->styles->pluck('name')->toArray()) }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 flex justify-center sm:mt-0">
                        <livewire:shared.interest :model="$course" withCount="true" />
                        <livewire:shared.like :model="$course" withCount="true" />
                    </div>
                </div>
            </div>
        </div>
        <nav class="relative z-0 rounded-b-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
            <a href="#" :class="{ 'text-indigo-800 bg-indigo-50' : tab == 'classes' }"
                x-on:click.prevent="tab = 'classes'"
                class="text-gray-500 rounded-bl-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Classes</span>
                <span aria-hidden="true" :class="{ 'bg-indigo-500':tab == 'classes'}"
                    class="absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>

            <a href="#" x-on:click.prevent="tab = 'stats'"
                :class="{ 'text-indigo-800 bg-indigo-50' : tab == 'stats', 'hover:text-gray-700': tab == 'stats' }"
                class="text-gray-500 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Stats</span>
                <span :class="{ 'bg-indigo-500':tab == 'stats'}"
                    class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>

            <a href="#" x-on:click.prevent="tab = 'students'"
                :class="{ 'text-indigo-800 bg-indigo-50' : tab == 'students', 'text-red-500 hover:text-gray-700': tab == 'students' }"
                class="text-gray-500 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Students</span>
                <span :class="{ 'bg-indigo-500':tab == 'students'}"
                    class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>

            <a href="#" x-on:click.prevent="tab = 'description'"
                class="text-gray-500 hover:text-gray-700 rounded-br-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                <span>Description</span>
                <span aria-hidden="true" :class="{ 'bg-indigo-500':tab == 'description'}"
                    class="absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>


        </nav>
    </div>

    <div x-show="tab === 'classes'">
        @include('course.show.classes')
    </div>

    <div x-show="tab === 'stats'">
        @include('course.show.stats')
    </div>

    <div x-show="tab === 'students'">
        @include('course.show.students')
    </div>

    <div x-show="tab === 'description'">
        @include('course.show.description')
    </div>


</div>