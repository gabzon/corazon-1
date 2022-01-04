<select id="role" name="role" {{ $attributes }}
    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
    <option value="student">Student</option>
    <option value="guest">Guest</option>
    <option value="assistant">Assistant</option>
    <option value="instructor">Instructor</option>
</select>

{{-- <fieldset>
    <label class="text-base font-medium text-gray-900">Status</label>
    <div class="mt-2 space-y-3">
        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="role" type="radio" value="instructor"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Instructor</label>
                <span class="text-gray-500">Person who teaches.</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="student"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Student</label>
                <span class="text-gray-500">Person who learns</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="assistant"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Assistant</label>
                <span class="text-gray-500">Person who helps the instructor</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="guest"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Guest</label>
                <span class="text-gray-500">User paid partially.</span>
            </div>
        </div>
    </div>
</fieldset> --}}