<div>
    <div x-data="{
        skip: 1,
        next() {
            this.to((current, offset) => current + (offset * this.skip))
        },
        prev() {
            this.to((current, offset) => current - (offset * this.skip))
        },
        to(strategy) {
            let slider = this.$refs.slider
            let current = slider.scrollLeft
            let offset = slider.firstElementChild.getBoundingClientRect().width
            slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
        },
        focusableWhenVisible: {
            'x-intersect:enter'() {
                this.$el.removeAttribute('tabindex')
            },
            'x-intersect:leave'() {
                this.$el.setAttribute('tabindex', '-1')
            },
        }
    }" class="flex flex-col w-full">
        <div x-on:keydown.right="next" x-on:keydown.left="prev" tabindex="0" role="region"
            aria-labelledby="carousel-label" class="flex space-x-6 focus:outline-none">
            <h2 id="carousel-label" class="sr-only" hidden>Carousel</h2>

            <button x-on:click="prev" class="text-4xl">
                <span aria-hidden="true">❮</span>
                <span class="sr-only">Skip to previous slide</span>
            </button>

            <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>

            <ul x-ref="slider" tabindex="0" role="listbox" aria-labelledby="carousel-content-label"
                class="flex w-full overflow-x-scroll snap-x snap-mandatory">
                @foreach ($organization->events->where('status','active')->sortByDesc('start_date') as $event)
                <li class="snap-start w-1/4 shrink-0 min-w-max">
                    <livewire:catalogue.event-card :event="$event" wire:key="{{ $event->id }}" />
                </li>
                @endforeach

            </ul>

            <button x-on:click="next" class="text-4xl">
                <span aria-hidden="true">❯</span>
                <span class="sr-only">Skip to next slide</span>
            </button>
        </div>
    </div>
</div>