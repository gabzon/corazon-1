<form wire:submit.prevent="update" class="space-y-8 divide-y divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-5">

            <div class="sm:col-span-4">
                <label for="facebook" class="block text-sm font-medium text-gray-700">
                    Facebook
                </label>
                <div class="mt-1">
                    <input type="url" name="facebook" id="facebook" autocomplete="facebook" wire:model.lazy="facebook"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('facebook') border-red-600 @enderror">
                </div>
                @error('facebook') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="sm:col-span-4">
                <label for="youtube" class="block text-sm font-medium text-gray-700">
                    Youtube
                </label>
                <div class="mt-1">
                    <input type="url" name="youtube" id="youtube" autocomplete="youtube" wire:model.lazy="youtube"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('youtube') border-red-600 @enderror">

                </div>
                @error('youtube') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="sm:col-span-4">
                <label for="instagram" class="block text-sm font-medium text-gray-700">
                    Instagram
                </label>
                <div class="mt-1">
                    <input type="url" name="instagram" id="instagram" autocomplete="instagram"
                        wire:model.lazy="instagram"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('instagram') border-red-600 @enderror">
                </div>
                @error('instagram') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="sm:col-span-4">
                <label for="twitter" class="block text-sm font-medium text-gray-700">
                    Twitter
                </label>
                <div class="mt-1">
                    <input type="url" name="twitter" id="twitter" autocomplete="twitter" wire:model.lazy="twitter"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('twitter') border-red-600 @enderror">
                </div>
                @error('twitter') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="sm:col-span-4">
                <label for="tiktok" class="block text-sm font-medium text-gray-700">
                    Tiktok
                </label>
                <div class="mt-1">
                    <input type="url" name="tiktok" id="tiktok" autocomplete="tiktok" wire:model.lazy="tiktok"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('tiktok') border-red-600 @enderror">
                </div>
                @error('tiktok') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
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
    </div>
</form>