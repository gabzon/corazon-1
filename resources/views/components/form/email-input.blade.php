<div>
    <label for="email" class="block text-sm font-medium text-gray-700 capitalize">
        Email
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <!-- Heroicon name: solid/mail -->
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
        </div>
        <input type="email" name="{{ $name }}" id="{{ $name }}" autocomplete="{{ $name }}" placeholder="you@example.com"
            {{ $attributes}}
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 pl-10 block w-full sm:text-sm border-gray-300 rounded-md @error($name) border-red-600 @enderror">
        @if ($description)
        <p class="mt-1 text-sm text-gray-500">
            {{ $description }}
        </p>
        @endif
    </div>
    @error($name)
    <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>