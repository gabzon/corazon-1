<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">User information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This information could be shared with third party organizations such as schools and event
                    organizers.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="user.mobile" name="user.mobile" label="Mobile phone" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <x-form.text-input wire:model="user.username" name="user.username" label="Username" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <x-form.date-input wire:model="user.birthday" name="user.birthday" label="Birthday" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="user.idn" name="user.idn" label="ID Number" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <x-form.text-input wire:model="user.profession" name="user.profession"
                                    label="Profession" />
                            </div>
                        </div>

                        <div>
                            <x-form.textarea wire:model="user.biography" label="Biography" name="biography" rows="4"
                                description="Brief description for your profile." />
                        </div>

                        <fieldset>
                            <div>
                                <legend class="text-base font-medium text-gray-900">Gender</legend>
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input wire:model="user.gender" value="male" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="gender" class="ml-3 block text-sm font-medium text-gray-700">
                                        Male
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input wire:model="user.gender" value="female" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="gender" class="ml-3 block text-sm font-medium text-gray-700">
                                        Female
                                    </label>
                                </div>
                            </div>
                            @error('user.gender')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-partials.saved-confirmation />
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 uppercase">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>