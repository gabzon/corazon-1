<form wire:submit.prevent="{{ $action }}" class="space-y-8 divide-y">
    <div class="space-y-8">
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-5">
            <div class="sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    Name
                </label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" autocomplete="name" wire:model="name"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('name') border-red-600 @enderror">
                </div>
                @error('name') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="sm:col-span-2">
                <label for="slug" class="block text-sm font-medium text-gray-700">
                    Slug
                </label>
                <div class="mt-1">
                    <input type="text" name="slug" id="slug" wire:model="slug" disabled
                        class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="shortname" class="block text-sm font-medium text-gray-700">
                    Shortname
                </label>
                <div class="mt-1">
                    <input type="text" name="shortname" id="shortname" autocomplete="shortname" wire:model="shortname"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>

        <div class="">
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-2">
                    <label for="contact" class="block text-sm font-medium text-gray-700">
                        Contact
                    </label>
                    <div class="mt-1">
                        <input type="text" name="contact" id="contact" autocomplete="contact" wire:model="contact"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700">
                        Phone
                    </label>
                    <div class="mt-1">
                        <input type="text" name="phone" id="phone" autocomplete="Phone" wire:model="phone"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" wire:model="email"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('email') border-red-600 @enderror">
                    </div>
                    @error('email') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="sm:col-span-6">
                    <label for="comments" class="block text-sm font-medium text-gray-700">
                        Comments
                    </label>
                    <div class="mt-1">
                        <textarea id="comments" name="comments" rows="3" wire:model="comments"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Write a few sentences about the location.</p>
                </div>

                <div class="sm:col-span-4">
                    <label for="website" class="block text-sm font-medium text-gray-700">
                        Website
                    </label>
                    <div class="mt-1">
                        <input type="url" name="website" id="website" autocomplete="website" wire:model="website"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('website') border-red-600 @enderror">
                    </div>
                    @error('website') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="type" class="block text-sm font-medium text-gray-700">
                        Type
                    </label>
                    <div class="mt-1">
                        <select id="type" name="type" wire:model="type"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            <option value="" selected disabled>Select type</option>
                            <option value="dance studio">{{ __('Dance studio') }}</option>
                            <option value="hotel">{{ __('Hotel') }}</option>
                            <option value="bar-restaurant">{{ __('Bar/Restaurant') }}</option>
                            <option value="event hall">{{ __('Event Hall') }}</option>
                        </select>
                    </div>
                </div>


                <div class="sm:col-span-6">
                    <label for="contract" class="block text-sm font-medium text-gray-700">
                        Contract
                    </label>
                    <div class="mt-1 flex items-center">
                        <span class="bg-gray-100 text-gray-300 px-3">
                            @if ($contract)
                            @include('icons.contract',['style'=>'h-10 w-10 text-green-700'] )
                            <button wire:click="remove" class="text-xs text-gray-600 hover:underline">Remove</button>
                            @else
                            @include('icons.contract',['style'=>'h-10 w-10'] )
                            @endif
                        </span>
                        <div class="mx-10">
                            <input type="file" name="contract" id="contract" autocomplete="contract"
                                wire:model="contract">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="flex justify-end items-center">
            <x-partials.saved-confirmation />
            <a href="{{ route('location.index') }}"
                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cancel
            </a>
            <button type="submit"
                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </div>
</form>