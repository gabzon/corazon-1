<div>
    <br>
    <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mb-4">
        <h3 id="default" class="text-lg leading-6 font-medium text-gray-900">
            Pricing
        </h3>
    </div>
    <div class="space-y-6">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full sm:w-1/5 px-3">
                <x-form.price-input wire:model="course.full_price" name="course.full_price" label="price" />
            </div>
            <div class="w-full sm:w-1/5 px-3">
                <x-form.price-input wire:model="course.reduced_price" name="course.reduced_price"
                    label="Reduced price" />
                <span class="text-xs text-gray-500">Reduction for multiple classes</span>
            </div>
            <div class="w-full sm:w-1/5 px-3">
                <x-form.price-input wire:model="course.student_price" name="course.student_price"
                    label="Student price" />
            </div>
            <div class="w-full sm:w-1/5 px-3">
                <x-form.price-input wire:model="course.unemployed_price" name="course.unemployed_price"
                    label="Unemployed price" />
            </div>
            <div class="w-full sm:w-1/5 px-3">
                <x-form.price-input wire:model="course.senior_price" name="course.senior_price" label="Senior price" />
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 items-center">
            <div class="w-full sm:w-1/5 px-3">
                <div class="relative flex items-start">
                    <div class="flex items-center h-5">
                        <input id="dropping" name="dropping" type="checkbox" wire:model="course.dropping"
                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="candidates" class="font-medium text-gray-700">Droppings</label>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/5 px-3">
                @if ($course->dropping)
                <x-form.price-input wire:model="course.dropping_price" name="course.dropping_price"
                    label="Dropping price" />
                @endif
            </div>
        </div>
    </div>
</div>