<div>
    <div class="mt-10 sm:mt-0">
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
                                    <x-form.text-input wire:model="lesson.title" name="lesson.title" label="Title" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <x-form.date-input wire:model="lesson.date" name="lesson.date" label="Date" />
                                </div>


                                <div class="col-span-6">
                                    <x-form.rich-text name="lesson.description"
                                        description="Detailed description of the event." />
                                </div>

                                <div class="col-span-6">
                                    <x-form.textarea wire:model="lesson.comments" label="Comments" name="comments"
                                        rows="4" description="Please write any comments regarding this lesson" />
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <x-form.organization-select wire:model="lesson.organization_id"
                                        name="lesson.organization_id" />
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
</div>