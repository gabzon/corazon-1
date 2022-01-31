<x-auth-layout>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
                <div>
                    <div class="bg-indigo-800 p-3 rounded-full inline-block">
                        <a href="{{ route('welcome') }}">
                            <span class="text-indigo-300">@include('icons.heart-fill', ['style' => 'w-5 h-5'])</span>
                        </a>
                    </div>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>
                </div>

                <div class="mt-8">
                    <div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">
                                Sign in with
                            </p>

                            <div class="mt-1">
                                <div>
                                    <a href="/auth/redirect"
                                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-indigo-100 bg-indigo-600 hover:bg-indigo-700">
                                        <span class="sr-only">Sign in with Facebook</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1 bg-indigo-800">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://source.unsplash.com/1920x1080/?heart"
                alt="corazon-unsplash" lazy="loading">
        </div>
    </div>
</x-auth-layout>