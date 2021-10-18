<div class="bg-indigo-700 px-3 py-3 mx-3 rounded-md">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <h3 class="text-lg text-bold mt-2 inline-flex items-center text-white">
                @include('icons.filter')
                <span class="ml-2">Filters:</span>
            </h3>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-3">
            <select id="city" wire:model="city"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All cities</option>
                @foreach ($cities as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <select wire:model="style"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All Styles</option>
                @foreach ($styles as $style)
                <option value="{{ $style->id }}">{{ $style->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <select wire:model="school"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All Schools</option>
                @foreach ($schools as $o)
                <option value="{{ $o->id }}">{{ $o->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/5 lg:w-1/6 px-3">
            <select id="level" wire:model="level"
                class="mt-1 w-full pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="" selected>All levels</option>
                <option value="open">Open Level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
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