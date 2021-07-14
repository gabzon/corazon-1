<div class="py-2 flex justify-between items-center">
    <div x-data="{ instructor:false }">
        <div x-show="instructor">
            <div class="flex justify-between items-center">
                <select id="instructor"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="" selected disabled>Choose Instructor</option>
                    @foreach (\App\Models\User::all() as $i)
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                    @endforeach
                </select>
                <button class="bg-indigo-600 text-white px-3 py-2 ml-3 text-sm rounded-md inline-flex"
                    @click="instructor=false" {{ $attributes }}>
                    @include('icons.plus') <span class="ml-2">Add</span>
                </button>
            </div>
        </div>
        <div x-show="!instructor">
            <button type="button" @click="instructor=true"
                class="group -ml-1 bg-white p-1 rounded-md flex items-center focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <span
                    class="w-8 h-8 rounded-full border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">
                    <!-- Heroicon name: solid/plus -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="ml-4 text-sm font-medium text-indigo-600 group-hover:text-indigo-500">Add</span>
            </button>
        </div>
    </div>
</div>