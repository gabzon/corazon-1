<div>
    <div class="pb-1 border-b border-gray-200 sm:flex sm:items-center sm:justify-between mt-12 mb-4">
        <h3 id="details" class="text-lg leading-6 font-medium text-gray-900">
            Details
        </h3>
    </div>
    <div class="space-y-6">
        <x-form.rich-text name="course.description" />

        <x-form.course-type-radio wire:model="course.type" />

        <x-form.text-input wire:model="course.keywords" name="keywords"
            description="Please separate keywords with commas." />

    </div>
</div>