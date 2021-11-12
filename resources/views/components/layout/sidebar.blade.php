<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-20">
        <div class="flex flex-col h-0 flex-1 overflow-y-auto bg-indigo-600">
            <div class="flex-1 flex flex-col">
                <nav aria-label="Sidebar" class="py-6 flex flex-col items-center space-y-1">
                    <a href="{{ route('dashboard') }}" id="home" data-tippy-placement="right" data-tippy-content="Home"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.home')
                    </a>
                    <a href="{{ route('courses.schedule') }}" id="catalogue" data-tippy-placement="right"
                        data-tippy-content="Catalogue"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.catalogue')
                    </a>
                    <a href="{{ route('course.index') }}" id="courses" data-tippy-placement="right"
                        data-tippy-content="Courses"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.courses')
                    </a>
                    <a href="{{ route('event.index') }}" id="events" data-tippy-placement="right"
                        data-tippy-content="Events"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.events')
                    </a>
                    <a href="{{ route('location.index') }}" id="locations" data-tippy-placement="right"
                        data-tippy-content="Locations"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.pinpoint')
                    </a>
                    {{-- <a href="#" id="attendance" data-tippy-placement="right" data-tippy-content="Attendance"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.presence')
                    </a> --}}
                    {{-- <a href="#" id="orders" data-tippy-placement="right" data-tippy-content="Orders"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.orders')
                    </a> --}}
                    {{-- <a href="#" id="transactions" data-tippy-placement="right" data-tippy-content="Transactions"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.transactions')
                    </a> --}}
                    {{-- <a href="#" id="moves" data-tippy-placement="right" data-tippy-content="Moves"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.dance')
                    </a> --}}
                    <a href="{{ route('user.index') }}" id="users" data-tippy-placement="right"
                        data-tippy-content="Users"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.users')
                    </a>
                </nav>
            </div>
            <div class="flex-shrink-0 flex flex-col">
                <nav aria-label="Sidebar" class="py-6 flex flex-col items-center space-y-1">
                    @if (auth()->user()->role == 'admin')
                    <a href="{{ route('style.index') }}" id="styles" data-tippy-placement="right"
                        data-tippy-content="Styles"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.music-genre')
                    </a>
                    @endif
                    {{-- <a href="{{ route('skill.index') }}" id="skills" data-tippy-placement="right"
                        data-tippy-content="Skills"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.award-fill')
                    </a> --}}
                    {{-- <a href="{{ route('challenge.index') }}" id="challenges" data-tippy-placement="right"
                        data-tippy-content="Challenges"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.challenge')
                    </a> --}}
                    {{-- <a href="{{ route('post.index') }}" id="posts" data-tippy-placement="right"
                        data-tippy-content="Posts"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.post')
                    </a> --}}
                    {{-- <a href="{{ route('tag.index') }}" id="tags" data-tippy-placement="right"
                        data-tippy-content="Tags"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.tags')
                    </a> --}}
                    <a href="{{ route('organization.index') }}" id="organizations" data-tippy-placement="right"
                        data-tippy-content="Organizations"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.school')
                    </a>
                    {{-- <a href="{{ route('product.index') }}" id="products" data-tippy-placement="right"
                        data-tippy-content="Products"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.product')
                    </a> --}}
                    <a href="{{ route('city.index') }}" id="cities" data-tippy-placement="right"
                        data-tippy-content="Cities"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.city')
                    </a>
                    {{-- <a href="{{ route('setting.index') }}" id="settings" data-tippy-placement="right"
                        data-tippy-content="Settings"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.settings')
                    </a> --}}
                    <a href="#" id="logout" data-tippy-placement="right" data-tippy-content="Logout"
                        class="flex items-center p-2 rounded-lg text-indigo-200 hover:bg-indigo-700">
                        @include('icons.logout')
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>

@push('modals')
<script>
    tippy('#home');
    tippy('#catalogue');
    tippy('#courses');
    tippy('#events');
    tippy('#locations');
    tippy('#attendance');
    tippy('#orders');
    tippy('#transactions');
    tippy('#moves');
    tippy('#users');

    tippy('#styles');
    tippy('#skills');
    tippy('#challenges');
    tippy('#posts');
    tippy('#tags');
    tippy('#organizations');
    tippy('#products');
    tippy('#cities');
    tippy('#settings');
    tippy('#logout');
</script>

@endpush