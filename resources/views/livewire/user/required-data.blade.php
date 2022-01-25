<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Required data</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Welcome {{ $user->name }}, before we continue we required the following information for schools and
                    organizers
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md border">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <fieldset>
                            <div>
                                <legend class="text-base font-medium text-gray-900">Gender</legend>
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input wire:model="user.gender" type="radio" value="male"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">
                                        Male
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input wire:model="user.gender" type="radio" value="female"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                                        Female
                                    </label>
                                </div>
                            </div>
                            @error('user.gender')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="user.username" name="user.username" label="Username" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <x-form.text-input wire:model="user.mobile" name="user.mobile" label="Mobile phone" />

                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Birthday</label>
                                    <div class="mt-1">
                                        <input type="date" name="user.birthday" id="user.birthday"
                                            wire:model="user.birthday"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-1"
                                            aria-describedby="birthday">
                                    </div>
                                    @error('user.birthday')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>