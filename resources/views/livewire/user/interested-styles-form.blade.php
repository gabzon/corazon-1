<div id="preferences" class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Preferred Styles</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Select list of family of styles to learn
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        {{-- {{ implode(',', $styles) }} --}}
                        <fieldset>
                            <legend class="text-base font-medium text-gray-900">Style family</legend>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="styles.cuban" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="cuban" class="font-medium text-gray-700">Cuban Salsa</label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $cuban->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="styles.line" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="line" class="font-medium text-gray-700">Line Salsa</label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $line->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="styles.bachata" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="bachata" class="font-medium text-gray-700">Bachata</label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $bachata->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="styles.urban" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="urban" class="font-medium text-gray-700">Urban</label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $urban->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="styles.kizomba" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="offers" class="font-medium text-gray-700">Kizomba</label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $kizomba->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="styles.tango" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="offers" class="font-medium text-gray-700">Tango</label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $tango->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-partials.saved-confirmation />
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>