<div class="fixed inset-0 overflow-hidden z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <div class="absolute inset-0 overflow-hidden">
        <!-- Background overlay, show/hide based on slide-over state. -->
        <div class="absolute inset-0" aria-hidden="true">
            <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex sm:pl-16">
                <div x-transition:enter="transform transition ease-out duration-500 sm:duration-700"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="w-screen max-w-2xl" @click.away="open = false">
                    <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                        <div class="px-4 py-6 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                    Profile
                                </h2>
                                <div class="ml-3 h-7 flex items-center">
                                    <button type="button" @click="open = false"
                                        class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500">
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
                        </div>
                        <!-- Main -->
                        <div class="divide-y divide-gray-200">
                            <div class="pb-6">
                                <div class="bg-indigo-700 h-24 sm:h-20 lg:h-28"></div>
                                <div class="-mt-12 flow-root px-4 sm:-mt-8 sm:flex sm:items-end sm:px-6 lg:-mt-15">
                                    <div>
                                        <div class="-m-1 flex">
                                            <div class="inline-flex rounded-lg overflow-hidden border-4 border-white">
                                                <img class="flex-shrink-0 h-24 w-24 sm:h-40 sm:w-40 lg:w-48 lg:h-48 object-cover"
                                                    src="{{ $user->photo }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 sm:ml-6 sm:flex-1">
                                        <div>
                                            <div class="flex items-center">
                                                <h3 class="font-bold text-xl text-gray-900 sm:text-2xl">
                                                    {{ $user->name }}
                                                </h3>
                                                <span
                                                    class="ml-2.5 bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full">
                                                    <span class="sr-only">Online</span>
                                                </span>
                                            </div>
                                            <p class="text-sm text-gray-500">{{ '@'.$user->username }}</p>
                                        </div>
                                        <div class="mt-5 flex flex-wrap space-y-3 sm:space-y-0 sm:space-x-3">
                                            <a href="mailto:{{ $user->email}}"
                                                class="flex-shrink-0 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:flex-1">Message</a>
                                            <a href="tel:{{ $user->mobile }}"
                                                class="flex-1 w-full inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Call</a>
                                            <span class="ml-3 inline-flex sm:ml-0">
                                                <div class="relative inline-block text-left"
                                                    x-data="{ options: false }">
                                                    <button type="button" @click="options = !options"
                                                        class="inline-flex items-center p-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-400 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                        id="options-menu-button" aria-expanded="false"
                                                        aria-haspopup="true">
                                                        <span class="sr-only">Open options menu</span>
                                                        <!-- Heroicon name: solid/dots-vertical -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                        </svg>
                                                    </button>
                                                    <div x-transition:enter="transition ease-out duration-100"
                                                        x-transition:enter-start="transform opacity-0 scale-95"
                                                        x-transition:enter-end="transform opacity-100 scale-100"
                                                        x-transition:leave="transition ease-in duration-75"
                                                        x-transition:leave-start="transform opacity-100 scale-100"
                                                        x-transition:leave-end="transform opacity-0 scale-95"
                                                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                        role="menu" aria-orientation="vertical" x-show="options"
                                                        aria-labelledby="options-menu-button" tabindex="-1">
                                                        <div class="py-1" role="none">
                                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm"
                                                                role="menuitem" tabindex="-1"
                                                                id="options-menu-item-0">View profile</a>
                                                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm"
                                                                role="menuitem" tabindex="-1"
                                                                id="options-menu-item-1">Copy profile link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-5 sm:px-0 sm:py-0">
                                <dl class="space-y-8 sm:divide-y sm:divide-gray-200 sm:space-y-0">
                                    @if ($user->biography )
                                    <div class="sm:flex sm:px-6 sm:py-5">
                                        <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48">
                                            Bio
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:ml-6 sm:col-span-2">
                                            <p>
                                                {{ $user->biography }}
                                            </p>
                                        </dd>
                                    </div>
                                    @endif

                                    <div class="sm:flex sm:px-6 sm:py-5">
                                        <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48">
                                            Email
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:ml-6 sm:col-span-2">
                                            {{ $user->email }}
                                        </dd>
                                    </div>
                                    <div class="sm:flex sm:px-6 sm:py-5">
                                        <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48">
                                            Mobile
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:ml-6 sm:col-span-2">
                                            {{ $user->mobile }}
                                        </dd>
                                    </div>

                                    @if ($user->birthday)
                                    <div class="sm:flex sm:px-6 sm:py-5">
                                        <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48">
                                            Birthday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:ml-6 sm:col-span-2">
                                            <time datetime="1982-06-23">
                                                {{ $user->birthday->format('F d, y') }} ({{ $user->age }} years old)
                                            </time>
                                        </dd>
                                    </div>
                                    @endif

                                    @if ($user->address)
                                    <div class="sm:flex sm:px-6 sm:py-5">
                                        <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48">
                                            Address
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:ml-6 sm:col-span-2">
                                            {{ $user->address }}
                                            {{ $user->address_info }}
                                            {{ $user->zip }}
                                            {{ $user->city }}
                                            {{ $user->country }}
                                        </dd>
                                    </div>
                                    @endif
                                </dl>
                            </div>
                            <div class="py-4">
                                {{--
                                <livewire:profile.registered-courses :user="$user" :org="$org" /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>