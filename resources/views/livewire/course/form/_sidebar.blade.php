<div class="space-y-6">
    <div>
        <livewire:component.thumbnail image="{{ $course->thumbnail }}" />
    </div>

    <x-form.classroom-select wire:model="course.classroom_id" name="course.classroom_id" />

    <x-form.select wire:model="course.status" name="course.status" :options="['Active', 'Draft', 'Soon', 'Expired']"
        label="Status" />

    <livewire:component.select2 :model="$course" select="styles" />

    <div>
        <livewire:component.instructors-list :course="$course" />
        <livewire:component.select-user />
    </div>
</div>