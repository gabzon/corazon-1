<div class="grid grid-cols-10 gap-6">
    <div class="col-span-6 sm:col-span-2">
        <x-form.price-input wire:model="pricing.price" name="pricing.price" label="Price" />
    </div>
    <div class="col-span-6 sm:col-span-1">
        <x-form.currency wire:model="event.currency" name="event.currency" />
    </div>
    <div class="col-span-6 sm:col-span-6">
        <x-form.text-input wire:model="pricing.label" name="pricing.label" label="Label" />
    </div>
    <div class="col-span-6 sm:col-span-1">
        <label for="" class="block text-sm font-medium text-gray-700 capitalize">
            &nbsp;
        </label>
        <div class="mt-1">
            <button
                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add
            </button>
        </div>
    </div>
</div>