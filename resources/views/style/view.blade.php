@auth
<x-app-layout>
    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">{{ $style->name }}</h2>
            <livewire:agenda.weekly :style="$style" />
        </div>
        <div class="max-w-7xl mx-auto my-6">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Comming soon</h2>

            <livewire:event.grid-by-month :style="$style" />
        </div>

    </div>
</x-app-layout>
@else
<x-guest-layout>
    <livewire:style.listing />
</x-guest-layout>
@endauth