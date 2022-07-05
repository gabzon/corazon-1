{{-- <nav aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-2">
        <li>
            <div class="flex items-center text-sm">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900"> Services </a>

                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true"
                    class="ml-2 flex-shrink-0 h-5 w-5 text-gray-300">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                </svg>
            </div>
        </li>

        <li>
            <div class="flex items-center text-sm">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900"> Physical </a>
            </div>
        </li>
    </ol>
</nav> --}}


<div class="mt-4">
    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        {{ $product->name }}
    </h1>
</div>

<section aria-labelledby="information-heading" class="mt-4">
    <h2 id="information-heading" class="sr-only">Product information</h2>

    <div class="flex items-center">
        <p class="text-md text-gray-700 sm:text-lg line-through">€{{ $product->full_price }}</p>

        <div class="ml-4">
            <p class="text-lg text-gray-900 sm:text-xl">€{{ $product->promo_price }}</p>
        </div>
    </div>
</section>

<table class="mt-4 w-2/3">
    <tr>
        <td width="30%" valign="top" class="text-gray-500 text-sm truncate font-semibold">Deadline</td>
        <td class="pb-3">
            @if (! $product->hasExpired() )
            <x-countdown :expires="\Carbon\Carbon::create($product->deadline)"
                class="bg-gray-200 items-center text-center rounded-2xl">
                <span x-text="timer.days">{{ $component->days() }}</span>d
                <span x-text="timer.hours">{{ $component->hours() }}</span>h
                <span x-text="timer.minutes">{{ $component->minutes() }}</span>m
                <span x-text="timer.seconds">{{ $component->seconds() }}</span>s
            </x-countdown>
            @else
            <span class="text-red-600 text-sm font-semibold">Product no longer available</span>
            @endif

        </td>
    </tr>
    <tr>
        <td class="text-gray-500 text-sm truncate font-semibold">Availability</td>
        <td>
            @if ($product->hasReachedAvailabilityLimit())
            <span class="text-red-600 text-sm font-semibold">Product no longer available</span>
            @else
            <x-ui.progress-bar percentage="{{ $product->availabilityPercentage }}" />
            @endif
        </td>
    </tr>
</table>

{{-- <div class="mt-6 flex items-center">
    <svg class="flex-shrink-0 w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
        fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd"
            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
            clip-rule="evenodd" />
    </svg>
    <p class="ml-2 text-sm text-gray-500">In stock and ready to ship</p>
</div> --}}

<section id="stripe-payment-form" class="mt-5">
    <div class="mt-10">
        @if ($product->hasExpired() || $product->hasReachedAvailabilityLimit())
        <button disabled="disabled" class="w-full bg-gray-300 border border-transparent rounded-md py-3 px-8 flex items-center justify-center
        text-base font-medium text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 cursor-no-drop">
            Checkout
        </button>
        @else
        <a href="{{ route('checkout.pay', ['pid' => $product->id ]) }}" role="link" class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center
            text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2
            focus:ring-offset-gray-50 focus:ring-indigo-500">
            Checkout
        </a>
        @endif

    </div>
    <div class="mt-6 text-center">
        <a href="#" class="group inline-flex text-base font-medium">
            @include('icons.waranty', ['style' => 'flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500'])
            <span class="text-gray-500 hover:text-gray-700">Lifetime Guarantee</span>
        </a>
    </div>
</section>


<div class="mt-4 space-y-6">
    <div class="text-xs text-gray-500 prose lg:prose-lg">
        {!! $product->content !!}
    </div>
</div>