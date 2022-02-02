<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Lesson Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Create a title, description or add videos regarding this lesson.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                @if($fullAccess)
                                <x-form.text-input wire:model="lesson.title" name="lesson.title" label="Title" />
                                @else
                                <h3 class="text-lg leading-6 font-medium text-gray-900 capitalize">
                                    {{ $lesson->title }}
                                </h3>
                                @endif
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                @if ($fullAccess)
                                <x-form.date-input wire:model="lesson.date" name="lesson.date" label="Date" />
                                @else
                                <h2 class="text-right">{{ $lesson->date ? $lesson->date->format('M d, Y') : '' }}</h2>
                                @endif
                            </div>

                            @if ($fullAccess)
                            <div class="col-span-6">
                                <x-form.rich-text name="lesson.description"
                                    description="Detailed description of the event." />
                            </div>
                            @endif

                            <div class="col-span-6">
                                <x-form.textarea wire:model="lesson.comments" label="Comments" name="comments" rows="3"
                                    description="Please write any comments regarding this lesson" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 flex justify-between items-center ">
                        <x-partials.saved-confirmation />
                        <x-jet-button>
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>