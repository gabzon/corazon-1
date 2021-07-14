<x-guest-layout>
    <div class="bg-indigo-50">
        <h2 class="text-3xl font-bold text-gray-900 text-center pt-10">Events</h2>
        <livewire:schedule.events />
    </div>
    <div class="border-t bg-gray-100">
        <div class="container mx-auto my-10">
            <h2 class="text-3xl font-bold text-gray-900 text-center mt-10">Courses</h2>
            <livewire:schedule.filters />
            <div class="py-10">
                <livewire:schedule.catalogue />
            </div>
        </div>
    </div>
</x-guest-layout>