<x-guest-layout>
    <main id="main" class="bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 text-center pt-10">Events</h2>
            <livewire:catalogue.events-filters />
            <div class="py-10">
                <livewire:catalogue.events />
            </div>
        </div>
    </main>
</x-guest-layout>