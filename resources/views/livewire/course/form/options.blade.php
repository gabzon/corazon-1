<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This information will be displayed publicly so be careful what you share.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="w-full sm:w-3/4 md:w-1/2">
                            <x-form.media-library name="thumbnail" :model="$course" collection="courses" />
                        </div>

                        <x-form.text-input wire:model="course.tagline" name="tagline" />

                        <x-form.textarea wire:model="course.excerpt" name="excerpt"
                            description="Brief description for the course." />

                        <x-form.text-input wire:model="course.keywords" name="keywords"
                            description="Please separate keywords with commas." />

                        <x-form.rich-text name="course.description" />

                        <div class="w-full">
                            <div class="mt-5 relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="standby" wire:model="course.standby" name="standby" type="checkbox"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Standby</label>
                                    <span id="comments-description" class="text-gray-500">
                                        sets students to standby upon registration.
                                    </span>
                                </div>
                            </div>
                        </div>

                        <livewire:component.select2.styles :model="$course" />
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.submit />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>