<x-guest-layout>
    <section class="bg-gray-50">
        <section class="max-w-7xl mx-auto py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $city->name }}</h1>
            <livewire:agenda.weekly :city="$city" />

        </section>
        <section class="max-w-7xl mx-auto py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-8">Coming soon</h2>
            <livewire:event.carousel :city="$city" />
        </section>
    </section>
</x-guest-layout>