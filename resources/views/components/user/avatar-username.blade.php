<div class="flex items-center">
    <div class="flex-shrink-0 h-10 w-10">
        <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->photo }}" alt="{{ $user->name }}">
    </div>
    <div class="ml-4 min-w-0 flex-1">
        <div class="text-sm font-medium text-gray-900">
            {{ $user->name }}
        </div>
        <div class="text-sm text-gray-500">
            {{ $user->email }}
        </div>
    </div>
</div>