<div>
    <div class="mt-6 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Course Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Enter course default information
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="save" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.city-select wire:model="course.city_id" name="course.city_id" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.organization-select wire:model="course.organization_id"
                                        name="course.organization_id" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.space-select wire:model="course.space_id" name="course.space_id" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <x-form.text-input wire:model="course.name" name="course.name" label="Name" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <x-form.slug-input wire:model="course.slug" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <x-form.level wire:model="course.level_code" name="course.level_code" />
                                </div>

                                <div class="col-span-6 sm:col-span-1">
                                    <x-form.level-number wire:model="course.level_number" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <x-form.text-input wire:model="course.level_label" name="course.level_label"
                                        label="Level Label" />
                                </div>

                                <div class=" col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.focus wire:model="course.focus" name="course.focus" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.date-input wire:model="course.start_date" name="course.start_date"
                                        label="Start date" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.date-input wire:model="course.end_date" name="course.end_date"
                                        label="End date" />
                                </div>

                                <div class="col-span-6">
                                    <x-form.course-type-radio wire:model="course.type" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <x-form.select wire:model="course.status" name="course.status"
                                        :options="['active', 'draft', 'soon', 'finished', 'canceled', 'review']"
                                        label="Status" />
                                </div>

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
</div>