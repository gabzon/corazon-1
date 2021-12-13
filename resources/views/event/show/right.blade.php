<div class="sticky top-4 space-y-4">
    <section aria-labelledby="who-to-follow-heading">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">
                    Instructors
                </h2>
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                        <li class="flex items-center py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#">Leonard Krasner</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a href="#">@leonardkrasner</a>
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                                    <!-- Heroicon name: solid/plus-sm -->
                                    <svg class="-ml-1 mr-0.5 h-5 w-5 text-rose-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </button>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
                <div class="mt-6">
                    <a href="#"
                        class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section aria-labelledby="trending-heading">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h2 id="trending-heading" class="text-base font-medium text-gray-900">
                    Students
                </h2>
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                        @forelse ($event->registrations as $registration)
                        <li class="flex items-center py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8 object-cover rounded-full" src="{{ $registration->user->photo }}"
                                    alt="">
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#">{{ $registration->user->name }}</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a href="#">{{ '@' . $registration->user->username}}</a>
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                                    <span>
                                        {{ $registration->status }}
                                    </span>
                                </button>
                            </div>
                        </li>
                        @empty

                        @endforelse


                    </ul>
                </div>
                <div class="mt-6">
                    <a href="#"
                        class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>