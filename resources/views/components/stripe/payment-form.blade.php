<form id="payment-form" method="POST" action="{{ route('purchase', ['pid'=> $product ]) }}">
    @csrf
    <div class=" mb-4">
        <x-form.text-input id="card-holder-name" name="card-holder-name" label="Cardholder name" />
    </div>
    <div id="payment-element">
        <!--Stripe.js injects the Payment Element-->
    </div>
    <button type="submit" id="card-button"
        class="mt-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition">
        <span id="button-text">Pay now</span>
    </button>
    <div id="payment-message" class="hidden"></div>
</form>

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("pk_test_51LAEhDIAIAzl9SyQE7dieje3vUcFslGEpQsljPkCtrLUoaXon3cqnr54FAAiOxnNyEi6hqodrpmWhbM26cjicWvX00a1wdcZzx");
    
    let elements;    
    
    initialize();

    async function initialize() {        
        elements = stripe.elements({ clientSecret: "{{ $payment->client_secret }}" });

        const paymentElement = elements.create("payment");
        paymentElement.mount("#payment-element");
    }    


    const cardHolderName = document.getElementById('card-holder-name');
    const form = document.getElementById('payment-form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();        
        
        await stripe.confirmPayment({
            elements,
            confirmParams: {                
                return_url: "http://localhost:4242/public/checkout.html",
            },
            redirect: "if_required"
        }).then(function(result){
            if (result.error) {
                if (result.error.type === "card_error" || result.error.type === "validation_error") {
                    showMessage(error.message);
                } else {
                    showMessage("An unexpected error occurred.");
                }   
                return;             
            }
            console.log(result.paymentIntent.payment_method);
            stripeTokenHandler(result.paymentIntent.payment_method);
        });            
    });

    function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function () {
            messageContainer.classList.add("hidden");
            messageText.textContent = "";
        }, 4000);
    }

    function stripeTokenHandler(paymentMethod) {
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'paymentMethod');
        hiddenInput.setAttribute('value', paymentMethod);
        form.appendChild(hiddenInput);
        form.submit();
    }
</script>
@endpush