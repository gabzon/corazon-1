@auth
<x-app-layout>
    <section class="bg-gray-50 py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto">
            <div class="mx-3 lg:mx-2 xl:mx-0">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Schools</h2>
                <livewire:organization.listing />
                <br>
                <br>
            </div>
        </div>
    </section>
</x-app-layout>
@else
<x-guest-layout>
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12">
            <div class="mx-3 md:mx-2 xl:mx-0">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-4">Schools</h2>
                <livewire:organization.listing />
            </div>
        </div>
    </section>
</x-guest-layout>
@endauth