<section class="mt-4">
    <div class="grid grid-cols-10 gap-2">
        <div class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1">
            <h4 class="text-center font-medium text-gray-700 text-base uppercase py-2">Monday</h4>
            @forelse ($mondays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="monday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>

        <div class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1">
            <h4 class=" text-center font-medium text-gray-700 text-base uppercase py-2">Tuesday</h4>
            @forelse ($tuesdays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="tuesday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>

        <div class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1">
            <h4 class="text-center font-medium text-gray-700 text-base uppercase py-2">Wednesday</h4>
            @forelse ($wednesdays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="wednesday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>

        <div class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1">
            <h4 class="text-center font-medium text-gray-700 text-base uppercase py-2">thursday</h4>
            @forelse ($thursdays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="thursday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>

        <div class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1">
            <h4 class="text-center font-medium text-gray-700 text-base uppercase py-2">Friday</h4>
            @forelse ($fridays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="friday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>

        @if ($saturdays->count() > 0)
        <div class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1">
            <h4 class="text-center font-medium text-gray-700 text-base uppercase py-2">Saturday</h4>
            @forelse ($saturdays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="saturday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>
        @endif

        @if ($sundays->count() > 0)
        <div
            class="col-span-10 sm:col-span-8 md:col-span-4 lg:col-span-3 xl:col-span-2 mt-4 sm:mt-3 md:mt-2 lg:mt-1 sm:bg-blue-300 md:bg-green-500 lg:bg-red-500 xl:bg-yellow-400">
            <h4 class="text-center font-medium text-gray-700 text-base uppercase py-2">Sunday</h4>
            @forelse ($sundays as $class)
            <livewire:schedule.school-card :class="$class" :key="$class->id" day="sunday" />
            @empty
            <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
            @endforelse
        </div>
        @endif
    </div>
</section>