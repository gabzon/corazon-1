@auth
<x-app-layout>
    <div class="py-12 h-screen overflow-y-scroll">
        <livewire:style.listing />
        <br>
        <br>
    </div>
</x-app-layout>
@else
<x-guest-layout>
    <div class="bg-gray-100 py-10">
        <livewire:style.listing />
        <br>
    </div>
</x-guest-layout>
@endauth