<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Delete event</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Permanently delete this event.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <form wire:submit.prevent="delete">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <p class="text-gray-600 text-sm">
                            Once the event is deleted, all of its resources and data will be permanently deleted. Please
                            download any data or information that you wish to retain, before deleting the event.
                        </p>
                        <button type="submit"
                            onclick="confirm('Are you sure you want to delete this event?') || event.stopImmediatePropagation()"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Delete event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>