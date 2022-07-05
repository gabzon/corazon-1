<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Product</h3>
                <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what
                    you share.</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="product.name" name="product.name" label="Name" />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.slug-input wire:model="product.slug" />
                            </div>
                        </div>

                        <div>
                            <x-form.text-input wire:model="product.tagline" name="product.tagline" label="Tagline" />
                        </div>

                        <div>
                            <x-form.textarea wire:model="product.description" label="Short description"
                                name="description" rows="3"
                                description="Please write a small description of the product" />
                        </div>

                        <div>
                            <x-form.rich-text name="product.content"
                                description="Detailed information of the product." />
                        </div>

                        <div>
                            @if ($product->video)
                            <div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden mb-3">
                                {!! $product->video !!}
                            </div>
                            @endif
                            <x-form.textarea wire:model="product.video" label="Promo Video" name="video" rows="4"
                                description="Please paste embed code from Youtube/Facebook/Vimeo." />
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.price-input wire:model="product.full_price" name="product.full_price"
                                    label="Full price" />
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.price-input wire:model="product.promo_price" name="product.promo_price"
                                    label="Promo Price" />
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <x-form.flatpickr wire:model="product.deadline" name="product.deadline"
                                    label="Deadline" />
                            </div>
                        </div>

                        <div class="grid grid-cols-4 gap-6">
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.text-input wire:model="product.qty" name="product.qty" label="Quantity" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.select-public wire:model="product.public" name="product.public" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-form.select-status wire:model="product.status" name="product.status" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">

                            </div>
                        </div>

                        <div>
                            <x-form.media-library-multiple name="images" :model="$product" collection="products"
                                label="Photos" />
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-form.submit />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>



'ordered',
'public',
'status',