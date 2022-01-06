<div>
    <h3 class="text-lg font-semibold text-gray-600">This week</h3>
    <x-profile.registrations-list :list="$list" :user="auth()->user()" />
</div>