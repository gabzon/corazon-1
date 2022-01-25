<div class="w-full flex flex-wrap">
    <div class="bg-gray-50 w-full md:w-3/4 order-last md:order-first">

        @if ($organization->events->count() > 0)
        <section class="bg-white">
            <div class="max-w-full mx-auto py-5 px-3 md:px-6 lg:px-8">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            Latests Events
                        </h2>
                    </div>
                </div>
                <div class="mt-6 dark">
                    @include('organization.view._events')
                </div>
            </div>
        </section>
        @endif

        @if ($organization->type == 'school')
        <section class="mt-8 pb-16">
            <div class="max-w-full mx-auto py-5 px-3 md:px-6 lg:px-8">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            Schedule
                        </h2>
                    </div>
                </div>
                @include('organization.show.schedule')
            </div>
        </section>
        @endif

        @if ($organization->about || $organization->video)
        @include('organization.view._about')
        @endif


        @if ($organization->teachers->count() > 0 )
        @include('organization.view._team')
        @endif

    </div>
    <div class="w-full md:w-1/4">
        @include('organization.show.sidebar')
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
@endpush