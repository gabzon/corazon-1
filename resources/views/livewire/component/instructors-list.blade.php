<div>
    <h3 class="font-medium text-gray-900">Instructor(s)</h3>
    <ul class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
        @if ($instructors)
        @foreach ($instructors as $instructor)
        <li class="py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=1024&h=1024&q=80"
                    alt="" class="w-8 h-8 rounded-full">
                <p class="ml-4 text-sm font-medium text-gray-900">{{ $instructor->name }}</p>
            </div>
            <button type="button"
                class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove
            </button>
        </li>
        @endforeach
        @endif
    </ul>
</div>