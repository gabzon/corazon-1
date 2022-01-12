<div>
    <fieldset>
        <legend class="block text-sm font-medium text-gray-700 mb-1">
            Type of course
        </legend>
        <div class="bg-white rounded-md -space-y-px shadow-sm" x-data="{ type:''}">
            <label @click="type = 'class'" :class="{'bg-indigo-50 border-indigo-200 z-10': type == 'class' }"
                class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer">
                <input type="radio" name="type" value="class" {{ $attributes }}
                    class="h-4 w-4 mt-0.5 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <div class="ml-3 flex flex-col">
                    <span :class="{'text-indigo-900': type === 'class' }"
                        class="text-gray-900 block text-sm font-medium">
                        Class
                    </span>
                    <span id="privacy-setting-0-description" :class="{'text-indigo-700': type === 'class' }"
                        class="text-gray-500 block text-sm">
                        A class is generally once or twice per week for a period of a month or longer.
                    </span>
                </div>
            </label>


            <label @click="type = 'workshop'" :class="{'bg-indigo-50 border-indigo-200 z-10': type === 'workshop' }"
                class="border-gray-200 relative border p-4 flex cursor-pointer">
                <input type="radio" name="type" value="workshop" {{ $attributes }}
                    class="h-4 w-4 mt-0.5 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <div class="ml-3 flex flex-col">
                    <span id="privacy-setting-1-label" :class="{'text-indigo-900': type === 'workshop' }"
                        class="text-gray-900 block text-sm font-medium">
                        Workshop
                    </span>
                    <span id="privacy-setting-1-description" :class="{'text-indigo-700': type === 'workshop'}"
                        class="text-gray-500 block text-sm">
                        A workshop is a class focused on a specific topic that last one or more hours in the same day.
                    </span>
                </div>
            </label>

            <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
            <label @click="type = 'bootcamp'" :class="{'bg-indigo-50 border-indigo-200 z-10': type === 'bootcamp' }"
                class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex cursor-pointer">
                <input type="radio" name="type" value="bootcamp" {{ $attributes }}
                    class="h-4 w-4 mt-0.5 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <div class="ml-3 flex flex-col">
                    <span id="privacy-setting-2-label" :class="{'text-indigo-900': type === 'bootcamp' }"
                        class="text-gray-900 block text-sm font-medium">
                        Bootcamp
                    </span>
                    <span id="privacy-setting-2-description" :class="{'text-indigo-700':type === 'bootcamp' }"
                        class="text-gray-500 block text-sm">
                        A Bootcamp is a set of workshops happening the same week. Same or similar topics. Also called
                        Intensive week
                    </span>
                </div>
            </label>
        </div>
    </fieldset>
</div>