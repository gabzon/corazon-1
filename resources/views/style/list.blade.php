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
    <livewire:style.listing />
</x-guest-layout>
@endauth