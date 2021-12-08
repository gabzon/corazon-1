<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-700 sm:text-3xl sm:truncate">
                    {{ __('Events') }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <button type="button"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Export
                </button>
                <a href="{{ route('event.create') }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Event
                </a>
            </div>
        </div>
    </x-slot>

    <main class="py-5 h-screen overflow-y-scroll">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <livewire:catalogue.events-filters />
            <div class="py-10">
                <livewire:catalogue.events />
            </div>
            <div class="my-14">&nbsp;</div>
        </div>
    </main>

    @push('scripts')
    {{-- https://github.com/spatie/laravel-medialibrary/issues/2290 --}}
    <script>
        document.addEventListener("livewire:load", function(event) {
            window.livewire.hook('message.processed', (component) => {
                refreshImages();
            })
        });
        function refreshImages(){
            var images = document.querySelectorAll('img[srcset*="responsive-images"]');
            window.requestAnimationFrame( function(){
                for(i = 0 ; i < images.length; i++){
                    var size = images[i].getBoundingClientRect().width;
                    var sizes = Math.ceil(size/window.innerWidth*100)+'vw';
                    images[i].sizes=sizes;
                }
            });
        }
    </script>
    @endpush
</x-app-layout>