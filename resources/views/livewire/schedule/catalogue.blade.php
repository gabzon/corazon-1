<div class="max-w-full mx-auto">
    <div class="px-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
        @forelse ($monday as $class)
        <livewire:schedule.card :class="$class" :key="$class->id" />
        @empty
        <p class="py-5 text-center text-sm font-medium text-gray-900 truncate">
            No courses found
        </p>
        @endforelse
    </div>
</div>