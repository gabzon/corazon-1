@auth
<x-app-layout>
    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">{{ $style->name }}</h2>
            <br>
            <iframe
                src="https://calendar.google.com/calendar/embed?src=ru7i7ffubbthjfvo3a0aaam2c0%40group.calendar.google.com&ctz=Europe%2FZurich"
                style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

        </div>

    </div>
</x-app-layout>
@else
<x-guest-layout>
    <livewire:style.listing />
</x-guest-layout>
@endauth