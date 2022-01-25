<aside class="bg-white overflow-y-scroll">
    <nav aria-label="Sections"
        class="hidden flex-shrink-0 w-96 bg-white border-r border-blue-gray-200 xl:flex xl:flex-col">
        <div class="flex-shrink-0 h-16 px-6 border-b border-blue-gray-200 flex items-center">
            <p class="text-lg font-medium text-blue-gray-900">Profile sections</p>
        </div>
        <div class="flex-1 min-h-0 overflow-y-auto">
            <!-- Current: "bg-blue-50 bg-opacity-50", Default: "hover:bg-blue-50 hover:bg-opacity-50" -->
            <a href="#name-email" class="hover:bg-indigo-50 bg-opacity-50 flex p-6 border-b border-indigo-gray-200">
                @include('icons.user', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">User</p>
                    <p class="mt-1 text-blue-gray-500">
                        Edit name, email and photo avatar
                    </p>
                </div>
            </a>

            <a href="#password" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.key', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Password</p>
                    <p class="mt-1 text-blue-gray-500">
                        Change your password. Don't forget to use longer than 8 characters.
                    </p>
                </div>
            </a>

            <a href="#info" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.info', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Personal info</p>
                    <p class="mt-1 text-blue-gray-500">
                        Personal information required by schools and organizers.
                    </p>
                </div>
            </a>

            <a href="#address" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.home', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Address information</p>
                    <p class="mt-1 text-blue-gray-500">Magna nulla id sed ornare ipsum eget. Massa eget porttitor
                        suscipit
                        consequat.</p>
                </div>
            </a>

            <a href="#social" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.share', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Social information</p>
                    <p class="mt-1 text-blue-gray-500">
                        Add your favorite social media urls.
                    </p>
                </div>
            </a>

            @can('updateWorkStatus', App\Models\User::class)
            <a href="#work-status" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.work-status', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Work Status</p>
                    <p class="mt-1 text-blue-gray-500">Nisi, elit volutpat odio urna quis arcu faucibus dui. Mauris
                        adipiscing pellentesque.</p>
                </div>
            </a>
            @endcan


            <a href="#role" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.keys', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Role</p>
                    <p class="mt-1 text-blue-gray-500">
                        Update user role to grant rights and permissions.
                    </p>
                </div>
            </a>

            <a href="#manager" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.manager', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Manager</p>
                    <p class="mt-1 text-blue-gray-500">Nisi, elit volutpat odio urna quis arcu faucibus dui. Mauris
                        adipiscing pellentesque.</p>
                </div>
            </a>

            <a href="#preferences" class="hover:bg-blue-50 hover:bg-opacity-50 flex p-6 border-b border-blue-gray-200">
                @include('icons.preferences', ['style' => 'flex-shrink-0 -mt-0.5 w-5 h-5 text-gray-400'])
                <div class="ml-3 text-sm">
                    <p class="font-medium text-blue-gray-900">Preferences</p>
                    <p class="mt-1 text-blue-gray-500">Quis viverra netus donec ut auctor fringilla facilisis. Nunc sit
                        donec cursus sit quis et.</p>
                </div>
            </a>
        </div>
    </nav>
</aside>