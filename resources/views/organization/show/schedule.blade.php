<div>
    <h2 id="gallery-heading" class="sr-only">Schedule</h2>
    <section>
        <div class="grid grid-cols-5">

            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Monday</h3>
                @foreach ($organization->courses()->where('status','active')->where('monday', 1)->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>


            <div>
                <h3 class=" text-center font-bold text-gray-700 text-lg uppercase">Tuesday</h3>
                @foreach ($organization->courses()
                ->where('status','active')
                ->where('tuesday', 1)
                ->orderBy('start_time_tue')
                ->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>


            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Wednesday</h3>
                @foreach ($organization->courses()->where('status','active')->where('wednesday',
                1)->orderBy('start_time_wed')->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>

            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">thursday</h3>
                @foreach ($organization->courses()
                ->where('status','active')
                ->where('thursday',1)
                ->orderBy('start_time_thu')->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>

            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Friday</h3>
                @foreach ($organization->courses()
                ->where('status','active')
                ->where('friday', 1)
                ->orderBy('start_time_fri')->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>

            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Saturday</h3>
                @foreach ($organization->courses()->where('status','active')->where('saturday', 1)->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>

            <div class="">
                <h3 class="text-center font-bold text-gray-700 text-lg uppercase">Sunday</h3>
                @foreach ($organization->courses()->where('status','active')->where('sunday', 1)->get() as $class)
                <livewire:schedule.card :class="$class" :key="$class->id" />
                @endforeach
            </div>

        </div>


    </section>
</div>