<div class="fixed inset-0 overflow-hidden z-50" role="dialog" aria-modal="true" x-cloak x-show="open">
    <div class="absolute inset-0 overflow-hidden">
        <!-- Background overlay, show/hide based on slide-over state. -->
        <div class="absolute inset-0" aria-hidden="true">
            <div class="fixed inset-y-0 pl-16 max-w-full right-0 flex">
                <!--
            Slide-over panel, show/hide based on slide-over state.
  
            Entering: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
                <div class="w-screen max-w-md" @click.away="open = false">
                    <form wire:submit.prevent="save"
                        class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                        <div class="flex-1 h-0 overflow-y-auto">
                            <div class="py-6 px-4 bg-indigo-700 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                        Edit User Registration
                                    </h2>
                                    <div class="ml-3 h-7 flex items-center">
                                        <button type="button" @click="open = false"
                                            class="bg-indigo-700 rounded-md text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                            <span class="sr-only">Close panel</span>
                                            <!-- Heroicon name: outline/x -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <p class="text-sm text-indigo-300">
                                        Update user's role or the registration status
                                    </p>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between">
                                <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                    <div class="space-y-6 pt-6 pb-5">
                                        <div>
                                            @if ($user)
                                            <x-user.avatar-username :user="$user" />
                                            @endif
                                        </div>
                                        <div>
                                            <label for="project-name" class="block text-sm font-medium text-gray-900">
                                                Registration Status
                                            </label>
                                            <div class="mt-1">
                                                <x-form.update-registration-status wire:model="status" />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="project-name" class="block text-sm font-medium text-gray-900">
                                                User Role
                                            </label>
                                            <div class="mt-1">
                                                <x-form.update-course-registration-role wire:model="role" />
                                            </div>
                                        </div>

                                        {{-- <div>
                                            <label for="description" class="block text-sm font-medium text-gray-900">
                                                Coments
                                            </label>
                                            <div class="mt-1">
                                                <textarea id="description" name="description" rows="4"
                                                    class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 px-4 py-4 flex justify-end">
                            <button @click="open = false" type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                            </button>
                            <button type="submit"
                                class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>