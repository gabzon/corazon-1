<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex-1 min-w-0">
                <x-typo.page-heading title="{{ $organization->name}}" />
            </div>
            <div class="flex md:mt-0 md:ml-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                {{-- @can('update', $course)
                <a href="{{ route('organization.edit', $organization) }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit
                </a>
                @endcan --}}
            </div>
        </div>
    </x-slot>

    <div class="max-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-full lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2 py-4 sm:py-6 md:py-8 lg:py-10">
                @include('organization.dashboard.nav')
            </div>
            <main class="lg:col-span-9 xl:col-span-6">
                <div class="py-4 sm:py-6 md:py-8 lg:py-10">
                    {{-- <section>
                        <header class="bg-white space-y-4 p-4 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
                            <div class="flex items-center justify-between">
                                <h2 class="font-semibold text-slate-900">Courses</h2>
                                <a href="/new"
                                    class="hover:bg-blue-400 group flex items-center rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
                                    <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
                                        <path
                                            d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                    </svg>
                                    New
                                </a>
                            </div>
                            <form class="group relative">
                                <svg width="20" height="20" fill="currentColor"
                                    class="absolute left-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:text-blue-500"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                </svg>
                                <input
                                    class="focus:ring-2 focus:ring-indigo-500 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm"
                                    type="text" aria-label="Filter projects" placeholder="Filter projects...">
                            </form>
                        </header>
                        <ul
                            class="bg-slate-50 p-4 sm:px-8 sm:pt-6 sm:pb-8 lg:p-4 xl:px-8 xl:pt-6 xl:pb-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4 text-sm leading-6">
                            <li>
                                <a href="project.url"
                                    class="hover:bg-indigo-500 hover:ring-indigo-500 hover:shadow-md group rounded-md p-3 bg-white ring-1 ring-slate-200 shadow-sm">
                                    <dl class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center">
                                        <div>
                                            <dd class="group-hover:text-white font-semibold text-slate-900">
                                                Salsa Cubana
                                            </dd>
                                        </div>
                                        <div>
                                            <dd class="group-hover:text-indigo-200">Beginner</dd>
                                        </div>
                                        <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-0 xl:mt-4">
                                            <dd
                                                class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
                                                <img src="https://gravatar.com/avatar/fd16b82559a74f6d2885448a1f1d5eef?s=400&d=robohash&r=x"
                                                    alt="user-photo"
                                                    class="w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
                                                    loading="lazy">
                                            </dd>
                                        </div>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="project.url"
                                    class="hover:bg-indigo-500 hover:ring-indigo-500 hover:shadow-md group rounded-md p-3 bg-white ring-1 ring-slate-200 shadow-sm">
                                    <dl class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center">
                                        <div>
                                            <dd class="group-hover:text-white font-semibold text-slate-900">
                                                Salsa en linea
                                            </dd>
                                        </div>
                                        <div>
                                            <dd class="group-hover:text-indigo-200">Intermediate</dd>
                                        </div>
                                        <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-0 xl:mt-4">
                                            <dd
                                                class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
                                                <img src="https://gravatar.com/avatar/fd16b82559a74f6d2885448a1f1d5eef?s=400&d=robohash&r=x"
                                                    alt="user-photo"
                                                    class="w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
                                                    loading="lazy">
                                            </dd>
                                        </div>
                                    </dl>
                                </a>
                            </li>
                            <li class="flex">
                                <a href="/new"
                                    class="hover:border-indigo-500 hover:border-solid hover:bg-white hover:text-indigo-500 group w-full flex flex-col items-center justify-center rounded-md border-2 border-dashed border-slate-300 text-sm leading-6 text-slate-900 font-medium py-3">
                                    <svg class="group-hover:text-blue-500 mb-1 text-slate-400" width="20" height="20"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                    </svg>
                                    New course
                                </a>
                            </li>
                        </ul>
                    </section> --}}
                </div>
            </main>
            <aside class="hidden xl:block xl:col-span-4 py-4 sm:py-6 md:py-8 lg:py-10 border">
                Area to be defined
            </aside>
        </div>
    </div>

</x-app-layout>