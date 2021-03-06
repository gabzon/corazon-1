@auth
<x-app-layout>
    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">{{ $style->name }}</h2>
            <livewire:agenda.weekly :style="$style" />
        </div>
        <div class="max-w-7xl mx-auto my-10">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Comming soon</h2>
            <livewire:event.grid-by-month :style="$style" />
        </div>

    </div>
</x-app-layout>
@else
<x-guest-layout>
    <div class="bg-gray-50">
        <div class="py-12 h-screen overflow-y-scroll">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">{{ $style->name }}</h2>
                <livewire:agenda.weekly :style="$style" />
            </div>
            <div class="max-w-7xl mx-auto my-10">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Comming soon</h2>
                <livewire:event.grid-by-month :style="$style" />
            </div>
        </div>
    </div>
</x-guest-layout>
@endauth