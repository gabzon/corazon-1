<div>
    @if ($errors->any())
    <div class="alert alert-danger p-2 mb-6">
        <ul class="list-disc mx-8">
            @foreach ($errors->all() as $error)
            <li class="text-red-600">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="location" class="block text-sm font-medium text-gray-700">
                    Location
                </label>
                <div class="mt-1">
                    <select id="location" name="location" wire:model="classroom.location_id"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" selected>Choose location</option>
                        @foreach (\App\Models\Location::all() as $l)
                        <option value="{{ $l->id }}">{{ $l->name }} ({{ $l->city->name }})</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="sm:col-start-1 sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    Name
                </label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" autocomplete="name" wire:model="classroom.name"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="slug" class="block text-sm font-medium text-gray-700">
                    Slug
                </label>
                <div class="mt-1">
                    <input type="text" name="slug" id="slug" wire:model="classroom.slug" disabled
                        class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="m2" class="block text-sm font-medium text-gray-700">
                    Squared Meters
                </label>
                <div class="mt-1">
                    <input type="number" name="m2" id="m2" wire:model="classroom.m2"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="location_id" class="block text-sm font-medium text-gray-700">
                    Capacity
                </label>
                <div class="mt-1">
                    <input type="number" name="capacity" id="capacity" wire:model="classroom.capacity"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="limit_couples" class="block text-sm font-medium text-gray-700">
                    Limit of couples
                </label>
                <div class="mt-1">
                    <input type="number" name="limit_couples" id="limit_couples" wire:model="classroom.limit_couples"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="color" class="block text-sm font-medium text-gray-700">
                    Color
                </label>
                <div class="mt-1">
                    <select id="color" name="color" autocomplete="color" wire:model="classroom.color"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" default selected disabled>Choose a color</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="gray">Gray</option>
                        <option value="purple">Purple</option>
                        <option value="green">Green</option>
                        <option value="yellow">Yellow</option>
                        <option value="purple">Purple</option>
                        <option value="pink">Pink</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-start-1 sm:col-span-1">
                <label for="price_hour" class="block text-sm font-medium text-gray-700">
                    Price/hour
                </label>
                <div class="mt-1">
                    <input type="number" name="price_hour" id="price_hour" wire:model="classroom.price_hour" step="0.01"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="price_month" class="block text-sm font-medium text-gray-700">
                    Price/month
                </label>
                <div class="mt-1">
                    <input
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        type="number" name="price_month" id="price_month" wire:model="classroom.price_month"
                        step="0.01">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="price_month" class="block text-sm font-medium text-gray-700">
                    Currency
                </label>
                <div class="mt-1">
                    <select id="location" name="location" wire:model="classroom.currency"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" selected disabled>Choose</option>
                        <option value="eur">Euros</option>
                        <option value="kn">Kunas</option>
                        <option value="usd">US Dollars</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="price_month" class="block text-sm font-medium text-gray-700">
                    Floor Type
                </label>
                <div class="mt-1">
                    <select id="location" name="location" wire:model="classroom.floor_type"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" selected disabled>Choose</option>
                        <option value="parket">Parket</option>
                        <option value="tiles">Tiles</option>
                        <option value="Ceramica">Ceramica</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="price_month" class="block text-sm font-medium text-gray-700">
                    Mirror Type
                </label>
                <div class="mt-1">
                    <select id="location" name="location" wire:model="classroom.mirror_type"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="" selected disabled>Choose</option>
                        <option value="full">Full size</option>
                        <option value="half">Haft way</option>
                        <option value="none">No mirrors</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="description" class="block text-sm font-medium text-gray-700">
                    Description
                </label>
                <div class="mt-1">
                    <textarea id="comments" name="comments" rows="3" wire:model="classroom.description"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about the classroom.</p>
            </div>

            <div class="sm:col-span-3">
                <div class="space-y-4">
                    <div class="relative flex items-start">
                        <div class="flex items-center h-5">
                            <input id="danceShoes" name="danceShoes" type="checkbox" wire:model="classroom.dance_shoes"
                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Dancing shoes?</label>
                            <p class="text-gray-500">Some locations require people to use stricly dancing shoes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-3">
                <div class="space-y-4">
                    <div class="relative flex items-start">
                        <div class="flex items-center h-5">
                            <input id="hasBar" name="hasBar" type="checkbox" wire:model="classroom.has_bar"
                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="hasBar" class="font-medium text-gray-700">Has bar?</label>
                            <p class="text-gray-500">Used for many kind of dancing exercices.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="photos" class="block text-sm font-medium text-gray-700">
                    Photos
                </label>
                <x-media-library-attachment multiple name="photos" rules="mimes:jpeg,png,gif" />
            </div>
        </div>


        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>