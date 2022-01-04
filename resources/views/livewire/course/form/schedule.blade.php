<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Schedule</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This information will be displayed publicly so be careful what you share.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <legend class="block text-sm font-medium text-gray-700 capitalize mb-2">Day & Time</legend>

                        <div class="grid grid-cols-6 gap-3 items-center">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.monday" name="monday" />
                            </div>

                            @if ($course->monday)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_mon" name="course.start_time_mon"
                                    label="Start Time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_mon" name="course.end_time_mon"
                                    label="End time" />
                            </div>
                            @endif
                        </div>

                        <div class="grid grid-cols-6 gap-3 items-center mt-2">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.tuesday" name="tuesday" />
                            </div>
                            @if ($course->tuesday)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_tue" name="course.start_time_tue"
                                    label="Start time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_tue" name="course.end_time_tue"
                                    label="End time" />
                            </div>
                            @endif
                        </div>


                        <div class="grid grid-cols-6 gap-3 items-center mt-2">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.wednesday" name="wednesday" />
                            </div>

                            @if ($course->wednesday)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_wed" name="course.start_time_wed"
                                    label="Start time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_wed" name="course.end_time_wed"
                                    label="End time" />
                            </div>
                            @endif
                        </div>


                        <div class="grid grid-cols-6 gap-3 items-center mt-2">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.thursday" name="thursday" />
                            </div>

                            @if ($course->thursday)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_thu" name="course.start_time_thu"
                                    label="Start time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_thu" name="course.end_time_thu"
                                    label="End time" />
                            </div>
                            @endif
                        </div>


                        <div class="grid grid-cols-6 gap-3 items-center mt-2">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.friday" name="friday" />
                            </div>

                            @if ($course->friday)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_fri" name="course.start_time_fri"
                                    label="Start time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_fri" name="course.end_time_fri"
                                    label="End time" />
                            </div>
                            @endif
                        </div>


                        <div class="grid grid-cols-6 gap-3 items-center mt-2">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.saturday" name="saturday" />
                            </div>
                            @if ($course->saturday)
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_sat" name="course.start_time_sat"
                                    label="Start time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_sat" name="course.end_time_sat"
                                    label="End time" />
                            </div>
                            @endif
                        </div>


                        <div class="grid grid-cols-6 gap-3 items-center mt-2">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.checkbox wire:model="course.sunday" name="sunday" />
                            </div>

                            @if ($course->sunday)
                            <div class="col-span-3 sm:col-span-2">
                                <x-form.time-input wire:model="course.start_time_sun" name="course.start_time_sun"
                                    label="Start time" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.time-input wire:model="course.end_time_sun" name="course.end_time_sun"
                                    label="End time" />
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>