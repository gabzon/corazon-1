<x-guest-layout>
    <div class="bg-gray-50">
        <div class=" max-w-full mx-3 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10">
            <section id="agenda" class="py-2 md:py-4 lg:py-6 xl:py-8">
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $city->name }}</h1>
                <livewire:agenda.weekly :city="$city" />
            </section>
            <section class="py-2 md:py-4 lg:py-6 xl:py-8" id="comming-soon">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-8">Coming soon events</h2>
                <livewire:event.carousel :city="$city" />
            </section>

            <section class="py-2 md:py-4 lg:py-6 xl:py-8" id="courses">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-8">Find Courses</h2>
                <livewire:catalogue.courses-catalogue :showCity="false" city="{{$city->id}}" />
            </section>
        </div>
    </div>
</x-guest-layout>