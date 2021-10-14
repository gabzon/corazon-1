<div>
    <h2 id="gallery-heading" class="sr-only">Schedule</h2>
    <section>
        <div class="grid grid-cols-5">

            <div>
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Monday</h3>
                @forelse ($mondays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="monday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>

            <div>
                <h3 class=" text-center font-bold text-gray-700 text-lg uppercase">Tuesday</h3>
                @forelse ($tuesdays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="tuesday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>

            <div>
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Wednesday</h3>
                @forelse ($wednesdays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="wednesday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>

            <div>
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">thursday</h3>
                @forelse ($thursdays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="thursday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>

            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Friday</h3>
                @forelse ($fridays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="friday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>

            @if ($saturdays->count() > 0)
            <div>
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Saturday</h3>
                @forelse ($saturdays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="saturday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>
            @endif

            @if ($sundays->count() > 0)
            <div>
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Sunday</h3>
                @forelse ($sundays as $class)
                <livewire:schedule.school-card :class="$class" :key="$class->id" day="sunday" />
                @empty
                <span class="block mt-3 bg-gray-100 text-center border py-2 rounded-md mx-3">No classes</span>
                @endforelse
            </div>
            @endif
        </div>
    </section>
</div>