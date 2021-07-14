<div>
    <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mt-12 mb-4">
        <h3 id="schedule" class="text-lg leading-6 font-medium text-gray-900">
            Schedule
        </h3>
    </div>
    <div class="grid grid-cols-6 gap-10 mb-4">
        <div class="col-span-6 sm:col-span-2 space-y-4">
            <x-form.date-input wire:model="course.start_date" name="course.start_date" label="Start date" />
            <x-form.date-input wire:model="course.end_date" name="course.end_date" label="End date" />
            <x-form.time-input wire:model="course.duration" name="duration" label="Duration" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <legend class="block text-sm font-medium text-gray-700 capitalize mb-2">Day & Time</legend>
            <div class="grid grid-cols-6 gap-3 items-center">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.monday" name="monday" />
                </div>

                @if ($course->monday)
                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_mon" name="start_time_mon" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_mon" name="end_time_mon" />
                </div>
                @endif
            </div>

            <div class="grid grid-cols-6 gap-3 items-center mt-2">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.tuesday" name="tuesday" />
                </div>
                @if ($course->tuesday)
                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_tue" name="start_time_tue" label="Start time" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_tue" name="end_time_tue" label="End time" />
                </div>
                @endif
            </div>


            <div class="grid grid-cols-6 gap-3 items-center mt-2">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.wednesday" name="wednesday" />
                </div>

                @if ($course->wednesday)
                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_wed" name="start_time_wed" label="Start time" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_wed" name="end_time_wed" label="End time" />
                </div>
                @endif
            </div>


            <div class="grid grid-cols-6 gap-3 items-center mt-2">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.thursday" name="thursday" />
                </div>

                @if ($course->thursday)
                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_thu" name="start_time_thu" label="Start time" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_thu" name="end_time_thu" label="End time" />
                </div>
                @endif
            </div>


            <div class="grid grid-cols-6 gap-3 items-center mt-2">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.friday" name="friday" />
                </div>

                @if ($course->friday)
                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_fri" name="start_time_fri" label="Start time" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_fri" name="end_time_fri" label="End time" />
                </div>
                @endif
            </div>


            <div class="grid grid-cols-6 gap-3 items-center mt-2">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.saturday" name="saturday" />
                </div>
                @if ($course->saturday)
                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_sat" name="start_time_sat" label="Start time" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_sat" name="end_time_sat" label="End time" />
                </div>
                @endif
            </div>


            <div class="grid grid-cols-6 gap-3 items-center mt-2">
                <div class="col-span-6 sm:col-span-2">
                    <x-form.checkbox wire:model="course.sunday" name="sunday" />
                </div>

                @if ($course->sunday)
                <div class="col-span-3 sm:col-span-2">
                    <x-form.time-input wire:model="course.start_time_sun" name="start_time_sun" label="Start time" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <x-form.time-input wire:model="course.end_time_sun" name="end_time_sun" label="End time" />
                </div>
                @endif
            </div>
        </div>
    </div>
</div>