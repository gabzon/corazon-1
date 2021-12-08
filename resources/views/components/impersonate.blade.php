<div>
    @if (session()->has('impersonate'))
    <div class="relative bg-indigo-600">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="pr-16 sm:text-center sm:px-16">
                <p class="font-medium text-white">
                    <span class="md:hidden">
                        You are impersonating {{ auth()->user()->name }}
                    </span>
                    <span class="hidden md:inline">
                        You are impersonating {{ auth()->user()->name }}
                    </span>
                    <span class="block sm:ml-2 sm:inline-block">
                        <a href="{{ route('leave-impersonation') }}" class="text-white font-bold underline">
                            Leave impersonation <span aria-hidden="true">&rarr;</span>
                        </a>
                    </span>
                </p>
            </div>
        </div>
    </div>
    @endif
</div>