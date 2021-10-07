<div class="space-y-6">

    <div>
        <label for="thumbnail" class="block text-sm font-medium text-gray-700 capitalize mb-1">Thumbnail</label>
        <x-form.media-library name="thumbnail" :model="$course" collection="courses" />
    </div>

    <x-form.classroom-select wire:model="course.classroom_id" name="course.classroom_id" />

    <x-form.select wire:model="course.status" name="course.status" :options="['Active', 'Draft', 'Soon', 'Expired']"
        label="Status" />

    {{-- <livewire:component.select2 :model="$course" select="styles" /> --}}
    <livewire:component.select2.styles :model="$course" />

    <div>
        <livewire:component.instructors-list :course="$course" />
        <livewire:component.select-user />
    </div>
</div>