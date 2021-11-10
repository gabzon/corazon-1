<div>
    <button wire:click="hola" type="submit"
        onclick="confirm('Are you sure you want to delete this city?') || event.stopImmediatePropagation()"
        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Delete
    </button>
</div>