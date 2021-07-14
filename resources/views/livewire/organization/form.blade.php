<div>
    <form wire:submit.prevent="{{ $action }}" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        General information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" autocomplete="name" wire:model="name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="slug" class="block text-sm font-medium text-gray-700">
                            Slug
                        </label>
                        <div class="mt-1">
                            <input type="text" name="slug" id="slug" wire:model="slug" disabled
                                class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3" wire:model="about"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Write a few sentences about the organization.</p>
                    </div>

                    <div class="sm:col-span-6">
                        @if ($video)
                        {!! $video !!}
                        @endif
                        <label for="video" class="block text-sm font-medium text-gray-700">
                            Video
                        </label>
                        <div class="mt-1">
                            <textarea id="video" name="video" rows="3" wire:model="video"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Paste embed code from Youtube/Facebook/Vimeo.</p>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="logo" class="block text-sm font-medium text-gray-700">
                            Logo
                        </label>

                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                @if ($action == 'update')
                                @isset($logo)
                                <img src="{{ asset($logo) }}" class="mb-2">
                                @endisset
                                @else
                                @if ($logo)
                                <img src="{{ asset($logo) }}" class="mb-2">
                                @endif
                                @endif
                                {{$logo}}
                                @if (!isset($logo))
                                @include('icons.add-photo', ['style'=>'mx-auto h-12 w-12 text-gray-400'])
                                @endif

                                <div class="flex justify-center text-sm text-gray-600">
                                    <label for="logo"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 px-2">
                                        <span>Upload a file</span>
                                        <input id="logo" name="logo" type="file" class="sr-only" wire:model="logo">
                                    </label>
                                    {{-- <p class="pl-1">or drag and drop</p> --}}
                                </div>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF up to 1MB
                                </p>
                                @error('logo')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="company_ref" class="block text-sm font-medium text-gray-700">
                            Organization ID
                        </label>
                        <div class="mt-1">
                            <input type="text" name="company_ref" id="company_ref" wire:model="company_ref"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="status" class="block text-sm font-medium text-gray-700">
                            Status
                        </label>
                        <div class="mt-1">
                            <select id="status" name="status" wire:model="status"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value="" default selected disabled>Select status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Standby</option>
                                <option>Pending</option>
                                <option>Closed</option>
                            </select>
                        </div>
                        @error('status')
                        <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="type" class="block text-sm font-medium text-gray-700">
                            Type
                        </label>
                        <div class="mt-1">
                            <select id="type" name="type" wire:model="type"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value="" selected disabled>Select type</option>
                                <option>School</option>
                                <option>Business</option>
                                <option>Organizer</option>
                                <option>Partner</option>
                                <option>Association</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Contact Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="contact" class="block text-sm font-medium text-gray-700">
                            Contact
                        </label>
                        <div class="mt-1">
                            <input type="text" name="contact" id="contact" autocomplete="contact" wire:model="contact"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium text-gray-700">
                            Phone
                        </label>
                        <div class="mt-1">
                            <input type="text" name="phone" id="phone" autocomplete="phone" wire:model="phone"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" wire:model="email"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="website" class="block text-sm font-medium text-gray-700">
                            Website
                        </label>
                        <div class="mt-1">
                            <input id="website" name="website" type="url" autocomplete="website" wire:model="website"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="country" class="block text-sm font-medium text-gray-700">
                            Country / Region
                        </label>
                        <div class="mt-1">
                            <select id="country" name="country" autocomplete="country" wire:model="country"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value="" selected disabled>Select country</option>
                                <option>Croatia</option>
                                <option>Bosnia</option>
                                <option>Montenegro</option>
                                <option>Serbia</option>
                                <option>Slovenia</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="state" class="block text-sm font-medium text-gray-700">
                            State / Province
                        </label>
                        <div class="mt-1">
                            <input type="text" name="state" id="state" wire:model="state"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="city_id" class="block text-sm font-medium text-gray-700">
                            City
                        </label>
                        <div class="mt-1">
                            <select id="city_id" name="city_id" wire:model="city_id"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value="" selected disabled>Select city</option>
                                @foreach (\App\Models\City::all() as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">
                            Postal Code
                        </label>
                        <div class="mt-1">
                            <input type="text" name="postal_code" id="postal_code" autocomplete="postal_code"
                                wire:model="postal_code"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="lat" class="block text-sm font-medium text-gray-700">
                            Latitude
                        </label>
                        <div class="mt-1">
                            <input type="text" name="lat" id="lat" autocomplete="lat" wire:model="lat"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="lng" class="block text-sm font-medium text-gray-700">
                            Longitude
                        </label>
                        <div class="mt-1">
                            <input type="text" name="lng" id="lng" autocomplete="lng" wire:model="lng"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="address" class="block text-sm font-medium text-gray-700">
                            Street Address
                        </label>
                        <div class="mt-1">
                            <input type="text" name="address" id="address" autocomplete="address" wire:model="address"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="address_info" class="block text-sm font-medium text-gray-700">
                            Address info
                        </label>
                        <div class="mt-1">
                            <input type="text" name="address_info" id="address_info" autocomplete="address_info"
                                wire:model="address_info"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Social Media Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="facebook" class="block text-sm font-medium text-gray-700">
                            Facebook
                        </label>
                        <div class="mt-1">
                            <input type="text" name="facebook" id="facebook" autocomplete="facebook"
                                wire:model="facebook"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="instagram" class="block text-sm font-medium text-gray-700">
                            Instagram
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="instagram" id="instagram" autocomplete="instagram"
                                wire:model="instagram"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="youtube" class="block text-sm font-medium text-gray-700">
                            Youtube
                        </label>
                        <div class="mt-1">
                            <input type="text" name="youtube" id="youtube" autocomplete="youtube" wire:model="youtube"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="tiktok" class="block text-sm font-medium text-gray-700">
                            Tiktok
                        </label>
                        <div class="mt-1">
                            <input type="text" name="tiktok" id="tiktok" autocomplete="tiktok" wire:model="tiktok"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="twitter" class="block text-sm font-medium text-gray-700">
                            Twitter
                        </label>
                        <div class="mt-1">
                            <input type="text" name="twitter" id="twitter" autocomplete="twitter" wire:model="twitter"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                    </div>
                </div>
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