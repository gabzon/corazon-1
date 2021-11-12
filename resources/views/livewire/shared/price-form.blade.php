<div class="mt-4">
    @if ($showForm)
    <div>
        <div class="mt-3 grid grid-cols-10 gap-6">
            <div class="col-span-6 sm:col-span-6">
                <x-form.text-input wire:model="price.label" name="price.label" label="Label" />
            </div>
            <div class="col-span-6 sm:col-span-2">
                <x-form.currency wire:model="price.currency" name="price.currency" />
            </div>
            <div class="col-span-6 sm:col-span-2">
                <x-form.price-input wire:model="price.amount" name="price.amount" label="Regular Price" />
            </div>
        </div>
        <div class="mt-4">
            <x-form.textarea wire:model="price.description" label="Description" name="description" rows="2"
                description="Please write a brief description for this price" />
        </div>
        <div x-data="{ open: false }">
            <div class="flex justify-start">
                <button type="button" @click="open = !open" x-show="!open"
                    class="text-sm text-indigo-500 hover:text-indigo-700 mt-2">
                    show advanced options <span aria-hidden="true">&rarr;</span>
                </button>
                <button type="button" @click="open = !open" class="text-sm text-indigo-500 hover:text-indigo-700 mt-2"
                    x-show="open">
                    hide options <span aria-hidden="true">x</span>
                </button>
            </div>


            <div x-show="open">
                <div class="mt-3 grid grid-cols-8 gap-6">
                    <div class="col-span-8 sm:col-span-4">
                        <x-form.text-input wire:model="price.label2" name="price.label2" placeholder="ex: Early Bird"
                            label="{{ $modelName == 'Event' ? 'Label 1' : 'Discount Label 1' }}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.price-input wire:model="price.amount2" name="price.amount2"
                            label="{{ $modelName == 'Event' ? 'Price 1' : 'Discount Price 1' }}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.flatpickr wire:model="price.deadline2" name="price.deadline2" label="Deadline 1" />
                    </div>
                </div>
                <div class="mt-3 grid grid-cols-8 gap-6">
                    <div class="col-span-8 sm:col-span-4">
                        <x-form.text-input wire:model="price.label3" name="price.label3" placeholder="ex: Early Bird"
                            label="{{ $modelName == 'Event' ? 'Label 2 (optional)' : 'Discount Label 2'}}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.price-input wire:model="price.amount3" name="price.amount3"
                            label="{{ $modelName == 'Event' ? 'Price 2' : 'Discount Price 2'}}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.flatpickr wire:model="price.deadline3" name="price.deadline3" label="Deadline 2" />
                    </div>
                </div>
                <div class="mt-3 grid grid-cols-8 gap-6">
                    <div class="col-span-8 sm:col-span-4">
                        <x-form.text-input wire:model="price.label4" name="price.label4" placeholder="ex: Early Bird"
                            label="{{ $modelName == 'Event' ? 'Label 3 (optional)' : 'Discount Label 3'}}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.price-input wire:model="price.amount4" name="price.amount4"
                            label="{{ $modelName == 'Event' ? 'Price 3' : 'Discount Price 3'}}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.flatpickr wire:model="price.deadline4" name="price.deadline4" label="Deadline 3" />
                    </div>
                </div>
                <div class="mt-3 grid grid-cols-8 gap-6">
                    <div class="col-span-8 sm:col-span-4">
                        <x-form.text-input wire:model="price.label5" name="price.label5" placeholder="ex: Early Bird"
                            label="{{ $modelName == 'Event' ? 'Label 4 (optional)' : 'Discount Label 4'}}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.price-input wire:model="price.amount5" name="price.amount5"
                            label="{{ $modelName == 'Event' ? 'Price 4' : 'Discount Price 4'}}" />
                    </div>
                    <div class="col-span-8 sm:col-span-2">
                        <x-form.flatpickr wire:model="price.deadline5" name="price.deadline5" label="Deadline 4" />
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-4">
            <button type="button" wire:click="save"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
            <button type="button" wire:click="cancel"
                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cancel
            </button>
        </div>
    </div>
    @endif

    @if (count($pricing) > 0)
    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Labels
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Amounts
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Currency
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Deadlines
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
                                    <p>{{ $price->label}}</p>
                                    @if ($price->label2)
                                    <p>{{ $price->label2 }}</p>
                                    @endif
                                    @if ($price->label3)
                                    <p>{{ $price->label3 }}</p>
                                    @endif
                                    @if ($price->label4)
                                    <p>{{ $price->label4 }}</p>
                                    @endif
                                    @if ($price->label5)
                                    <p>{{ $price->label5 }}</p>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <p>{{ $price->amount }}</p>
                                    @if ($price->amount2)
                                    <p>{{ $price->amount2 }}</p>
                                    @endif
                                    @if ($price->amount3)
                                    <p>{{ $price->amount3 }}</p>
                                    @endif
                                    @if ($price->amount4)
                                    <p>{{ $price->amount4 }}</p>
                                    @endif
                                    @if ($price->amount5)
                                    <p>{{ $price->amount5 }}</p>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 uppercase">
                                    {{ $price->currency }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 uppercase">
                                    <p>-</p>
                                    @if ($price->deadline2)
                                    <p>{{ $price->deadline2 }}</p>
                                    @endif
                                    @if ($price->deadline3)
                                    <p>{{ $price->deadline3 }}</p>
                                    @endif
                                    @if ($price->deadline4)
                                    <p>{{ $price->deadline4 }}</p>
                                    @endif
                                    @if ($price->deadline5)
                                    <p>{{ $price->deadline5 }}</p>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
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