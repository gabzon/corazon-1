<div class="bg-gray-200 px-3 py-3 mx-3 mt-5 rounded-lg">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <h3 class="text-lg text-bold mt-2 inline-flex items-center">
                @include('icons.filter')
                <span class="ml-2">Filters:</span>
            </h3>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-3">
            <select id="city" wire:model="city"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All cities</option>
                @foreach (\App\Models\City::all() as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <select wire:model="style"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All Styles</option>
                @foreach (\App\Models\Style::all() as $style)
                <option value="{{ $style->id }}">{{ $style->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <select wire:model="style"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All Types</option>
                <option value="party">Party</option>
                <option value="workshop">Workshop</option>
                <option value="festival">Festival</option>
            </select>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <select id="day" wire:model="day"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All Days</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
            </select>
        </div>
    </div>

</div>