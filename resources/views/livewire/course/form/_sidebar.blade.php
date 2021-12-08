<div class="space-y-6">

    <div>
        <x-form.media-library name="thumbnail" :model="$course" collection="courses" />
    </div>

    <x-form.space-select wire:model="course.space_id" name="course.space_id" />

    <x-form.select wire:model="course.status" name="course.status"
        :options="['active', 'draft', 'soon', 'finished', 'canceled', 'review']" label="Status" />


    {{--
    <livewire:component.select2 :model="$course" select="styles" /> --}}
    <livewire:component.select2.styles :model="$course" />

    <div>
        <livewire:component.instructors-list :course="$course" />
        <livewire:component.select-user />
    </div>
</div>