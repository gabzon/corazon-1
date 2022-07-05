<section id="stripe-payment-form" x-data="{showForm: @entangle('ready') }" class="mt-5">
    <div class="mt-10">
        <button type="button" wire:click="checkout"
            class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
            Checkout
        </button>
    </div>
    <div class="mt-6 text-center">
        <a href="#" class="group inline-flex text-base font-medium">
            @include('icons.waranty', ['style' => 'flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500'])
            <span class="text-gray-500 hover:text-gray-700">Lifetime Guarantee</span>
        </a>
    </div>
    <div x-show="showForm" x-cloak class="my-6">
        <form id="payment-form" method="POST" action="{{ route('purchase') }}">
            @csrf
            <div class=" mb-4">
                <x-form.text-input id="card-holder-name" name="card-holder-name" label="Cardholder name" />

            </div>
            <div id="payment-element">
                <!--Stripe.js injects the Payment Element-->
            </div>
            <button type="submit" id="card-button"
                class="mt-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition">
                <div class="spinner hidden" id="spinner"></div>
                <span id="button-text">Pay now</span>
            </button>
            <div id="payment-message" class="hidden"></div>
        </form>
    </div>
</section>

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("pk_test_51LAEhDIAIAzl9SyQE7dieje3vUcFslGEpQsljPkCtrLUoaXon3cqnr54FAAiOxnNyEi6hqodrpmWhbM26cjicWvX00a1wdcZzx");
    
    const items = [{ id: "{{ $product->id }}", name:"{{ $product->name }}", price: "{{ $product->promo_price }}" }];
    
    let elements;    
    
    initialize();

    async function initialize() {        

        const { clientSecret } = await fetch("{{ route('stripe.checkout') }}", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ items }),
        }).then((r) => r.json());

        elements = stripe.elements({ clientSecret: clientSecret });

        const paymentElement = elements.create("payment");
        paymentElement.mount("#payment-element");
    }    

    const cardHolderName = document.getElementById('card-holder-name');
    const form = document.getElementById('payment-form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const { error } = await stripe.confirmPayment({
            elements,
            confirmParams: {                
                return_url: "http://localhost:4242/public/checkout.html",
            },
            redirect: "if_required"
        });
    
        if (error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
        } else {           
            form.submit();              
        }
    });
</script>
@endpush