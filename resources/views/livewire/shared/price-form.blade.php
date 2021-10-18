<div>
    @if ($showForm)
    <div class="mt-3 grid grid-cols-10 gap-6">
        <div class="col-span-6 sm:col-span-2">
            <x-form.price-input wire:model="price.amount" name="price.amount" label="Price" />
        </div>
        <div class="col-span-6 sm:col-span-2">
            <x-form.currency wire:model="price.currency" name="price.currency" />
        </div>
        <div class="col-span-6 sm:col-span-6">
            <x-form.text-input wire:model="price.label" name="price.label" label="Label" />
        </div>
    </div>
    <div class="mt-4">
        <x-form.textarea wire:model="price.description" label="Description" name="description" rows="2"
            description="Please write a brief description for this price" />
    </div>
    <div class="mt-3">
        <button type="button" wire:click="save"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
        </button>
        <button type="button" wire:click="cancel"
            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancel
        </button>
    </div>

    @endif

    @if (count($pricing) > 0)
    <div class="flex flex-col mt-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Label
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Amount
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Currency
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($pricing as $price)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $price->label}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $price->amount }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 uppercase">
                                    {{ $price->currency }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $price->description }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                    <button type="button" wire:click="edit({{$price->id}})"
                                        class="text-indigo-500 hover:text-indigo-600 hover:bg-gray-200 rounded-full p-2">
                                        @include('icons.pen')
                                    </button>
                                    <button type="button" wire:click="delete({{ $price->id }})"
                                        class="text-indigo-500 hover:text-indigo-600 hover:bg-gray-200 rounded-full p-2">
                                        @include('icons.garbage')
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (!$showForm)
    <div class="mt-2">
        <button type="button" wire:click="add"
            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add Price
        </button>
    </div>
    @endif


</div>