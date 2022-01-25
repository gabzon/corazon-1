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
                                @foreach ($families as $family => $styles)
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="preferedStyles" type="checkbox" value="{{ $family }}"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="cuban" class="font-medium text-gray-700">
                                            {{ $family }}
                                        </label>
                                        <p class="text-gray-500">
                                            {{ implode(', ', $styles->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </fieldset>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-form.submit />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>