<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Styles</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Add all the associated styles to this <span class="lowercase">{{ class_basename($model) }}</span>
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-2">
                                <label for="Styles" class="block text-sm font-medium text-gray-700">
                                    Styles
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select id="style-list" wire:model="sid"
                                        class="mt-1 mr-2 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                        <option value="" selected default disabled>Select style</option>
                                        @foreach ($styles as $style)
                                        <option value="{{ $style->id }}">{{ $style->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-ui.button route="#" size="xs" css="ml-3" wire:click="add">
                                        Add
                                    </x-ui.button>
                                </div>
                            </div>
                        </div>

                        <div>

                            <ul role="list" class="divide-y divide-gray-200">
                                @forelse ($model->styles as $style)
                                <li class="py-4 flex justify-between items-center">
                                    <div class="flex">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://eu.ui-avatars.com/api/?name={{urlencode($style->name)}}"
                                            alt="{{ $style->name }}">
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">{{ $style->name }}</p>
                                            <p class="text-sm text-gray-500">{{ $style->origin }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" wire:click="remove({{$style->id}})"
                                            class="text-sm font-medium text-indigo-500 hover:text-indigo-800">remove</button>
                                    </div>
                                </li>
                                @empty
                                <li class="py-4 flex">
                                    <p class="text-sm font-medium text-gray-900">No styles found!</p>
                                </li>
                                @endforelse
                            </ul>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 flex">
                        <x-partials.saved-confirmation /> &nbsp;
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>