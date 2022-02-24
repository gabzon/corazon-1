<ul role="list" class="divide-y divide-gray-200">
    @foreach ($event->courses as $course)
    <li class="py-4">
        <div class="grid grid-cols-4 gab-1 sm:gap-3 items-center">
            <div class="col-span-6 sm:col-span-3">
                <p class="text-sm font-medium text-gray-900">{{ $course->name }}</p>
                <p class="text-sm text-gray-500 truncate">{{ $course->excerpt }}</p>
            </div>
            <div class="col-span-4 sm:col-span-1 flex justify-end">
                <livewire:shared.registration-button :model="$course" size="xs" wire:key="{{ $course->id }}" />
            </div>
        </div>
    </li>
    @endforeach
</ul>