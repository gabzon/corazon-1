<div class="my-4 mx-3">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                User Information
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Personal details are shared only with schools and organizations you are registered in
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->email }}
                    </dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Mobile
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->mobile }}
                    </dd>
                </div>

                @if ($user->phone)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone (home/work)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->phone }}
                    </dd>
                </div>
                @endif

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Birthday
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{$user->birthday->format('d M Y')}}
                    </dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Work status
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->work_status }}
                    </dd>
                </div>

                @if ($user->idn)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        ID number
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->idn }}
                    </dd>
                </div>
                @endif

                @if ($user->profession)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Profession
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->profession }}
                    </dd>
                </div>
                @endif

                @if ($user->address)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->address }} {{ $user->zip ? ', ' . $user->zip : '' }}
                    </dd>
                </div>
                @endif

                @if ($user->address_info)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Address additional
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->address_info }}
                    </dd>
                </div>
                @endif

                @if ($user->city)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        City
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->city }} {{ $user->state }}
                    </dd>
                </div>
                @endif

                @if ($user->country)
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Country
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $user->country }}
                    </dd>
                </div>
                @endif

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                        Social Media
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        <x-partials.social-links :model="$user" />
                    </dd>
                </div>

            </dl>
        </div>
    </div>
</div>