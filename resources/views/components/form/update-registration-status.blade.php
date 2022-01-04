<select id="status" name="status" {{ $attributes }}
    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
    <option value="pre-registered">Pre-registered</option>
    <option value="registered">Registered</option>
    <option value="partial">Partial</option>
    <option value="waiting">Waiting</option>
    <option value="standby">Standby</option>
    <option value="canceled">Canceled</option>
</select>

{{-- <fieldset>
    <label class="text-base font-medium text-gray-900">Status</label>
    <div class="mt-2 space-y-3">
        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="pre-registered"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">pre-registered</label>
                <span class="text-gray-500">User have not payed yet.</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="registered"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Registered</label>
                <span class="text-gray-500">User fully paid.</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="partial"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Partial</label>
                <span class="text-gray-500">User paid partially.</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="waiting"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Waiting</label>
                <span class="text-gray-500">User is in waiting list</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="waiting"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Standby</label>
                <span class="text-gray-500">User is waiting for decision to be made</span>
            </div>
        </div>

        <div class="relative flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="status" type="radio" value="canceled"
                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="status" class="font-medium text-gray-700">Canceled</label>
                <span class="text-gray-500">Registration cancelled</span>
            </div>
        </div>
    </div>
</fieldset> --}}