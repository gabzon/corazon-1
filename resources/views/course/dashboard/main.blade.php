<div class="flex flex-col min-h-screen overflow-y-auto">
    <div class="flex-none px-3 sm:px-0">
        @can('update', $course)
        @include('course.dashboard._mobile-menu')
        @endcan
        @include('course.dashboard._card')
    </div>
    <div class="mt-4 px-4 sm:px-0">
        <ul role="list" class="space-y-4">
            @foreach ($course->lessons->sortDesc() as $lesson)
            <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                <livewire:course.lesson-card :lesson="$lesson" wire:key="{{ $item->id }}" />
            </li>
            @endforeach
        </ul>
        <div class="my-24">&nbsp;</div>
    </div>
</div>