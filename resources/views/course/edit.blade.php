<x-app-layout>
    <x-slot name="css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"
            integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA=="
            crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </x-slot>
    <div class="py-12 h-screen overflow-y-scroll">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:course.form.course-default :course="$course" />

            {{--
            <livewire:course.form :course="$course" /> --}}
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:course.form.options :course="$course" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:course.form.schedule :course="$course" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:course.form.videos :course="$course" />
        </div>

        <x-jet-section-border />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:course.form.teachers :course="$course" />
        </div>

        <div class="my-10">&nbsp;</div>
    </div>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js"
        integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg=="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
</x-app-layout>