<x-guest-layout>
    <main id="main" class="bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 text-center pt-10">Events</h2>
            <livewire:catalogue.events-catalogue />
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
</x-guest-layout>