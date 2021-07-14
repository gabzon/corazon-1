<div x-data="{ selectUser: false }">
    <div x-show="selectUser" class="flex justify-between items-center">
        {{-- Tutorial https://www.youtube.com/watch?v=L_f9gNaSCRE --}}
        <div x-data="select({data: {{ $users }}, placeholder:'Select user', value: @entangle('user'), emptyOptionsMessage: 'No results match your search', name:'instructor' })"
            x-init="init()" @click.away="closeListBox()" @keydown.escape="closeListBox()" class="my-3 w-full">

            <div class="mt-1 relative">
                <button x-ref="button" @click="toggleListBoxVisibility()"
                    class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                    <span x-show="!open" class="flex items-center pl-3 pr-10 py-2 mb-1"
                        x-text="value in options ? options[value].name : placeholder"
                        :class="{'text-gray-500':!(value in options)}">
                        {{-- <img src="options[value].avatar" alt="" class="flex-shrink-0 h-6 w-6 rounded-full"> --}}
                        <span class="ml-3 block truncate pl-3 pr-10 py-2"></span>
                    </span>
                    <input type="search" x-ref="search" x-show="open" x-model="search"
                        @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()"
                        @keydown.arrow-down.prevent="focusNextOption()"
                        class="border-0 focus:outline-none ring-white h-full w-full">
                    <span x-show="!open" class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <!-- Heroicon name: solid/selector -->
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <ul x-show="open" x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak tabindex="-1"
                    role="listbox" :aria-activedescendant="name + focusedOptionIndex" aria-labelledby="listbox-label"
                    x-ref="listbox"
                    class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">

                    <template x-for="(key, index) in Object.keys(options)" :key="index">
                        <li :class="{'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index != focusedOptionIndex}"
                            class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9"
                            id="listbox-option-0" role="option" @click="selectOption()"
                            @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null"
                            :id="name + index" :aria-selected="focusedOptionIndex === index">
                            <div class="flex items-center">
                                <img :src="Object.values(options)[index].avatar" alt=""
                                    class="flex-shrink-0 h-6 w-6 rounded-full">

                                <span x-text="Object.values(options)[index].name"
                                    :class="{ 'font-semibold': focusedOptionIndex === index, 'font-normal':focusedOptionIndex != index }"
                                    class="font-normal ml-3 block truncate"></span>

                            </div>

                            <span x-show="key === value"
                                :class="{ 'text-white': focusedOptionIndex === index, 'text-indigo-600': focusedOptionIndex != index}"
                                class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </li>
                    </template>
                    <div x-show="!Object.keys(options).lenght" class="px-3 py-2 select-none cursor-default"
                        x-text="emptyOptionsMessage"></div>
                </ul>
            </div>
            <script>
                function select(config){
                return {
                    data: config.data,    
                    emptyOptionsMessage: config.emptyOptionsMessage ?? 'No results found',
                    focusedOptionIndex: null,
                    name: config.name,
                    open: false,
                    options: null,
                    placeholder: config.placeholder ?? 'Select an option',
                    value: config.value,
                    search:'',
                    
                    closeListBox: function(){
                        this.open = false;
                        this.focusedOptionIndex = null;
                    },
    
                    focusPreviousOption: function(){
                        if (this.focusedOptionIndex === null) {
                            return this.focusedOptionIndex = 0;  
                        }
    
                        if (this.focusedOptionIndex <= 0) {
                            return;
                        }
    
                        this.focusedOptionIndex--;
    
                        this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
                                block:'center',
                        });
                    },
    
                    focusNextOption: function() {
                        if (this.focusedOptionIndex === null) {
                            return this.focusedOptionIndex = Object.keys(this.options).length -1;  
                        }
    
                        if ((this.focusedOptionIndex + 1) >= Object.keys(this.options).length) {
                            return;
                        }
    
                        this.focusedOptionIndex++;
    
                        this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
                                block:'center',
                        });
                    },
    
                    
                    init: function (){
                        this.options = this.data;
                        if( !(this.value in this.options)) this.value = null;
                        
                        this.$watch('search', (value) => {
                            if (!this.open || !value ) {                
                                return this.options = this.data;
                            }
    
                            this.options = Object.keys(this.data)                            
                                .filter( (key) => this.data[key].name.toLowerCase().includes(value.toLowerCase()) )
                                .reduce( (options, key) => {
                                    options[key] = this.data[key];
                                    return options;
                                },{})
                        });
                    },
                    
                    selectOption: function(){
                        if (!this.open) {
                            return this.toggleListBoxVisibility()
                        }
    
                        this.value = Object.keys(this.options)[this.focusedOptionIndex];
                        this.model = Object.values(this.options)[this.focusedOptionIndex].id;
                        this.closeListBox();
                    },
                    
                    toggleListBoxVisibility: function (){
                        if (this.open) {
                            return this.closeListBox();
                        }
                        this.focusedOptionIndex = Object.keys(this.options).indexOf(this.value)
                        if (this.focusedOptionIndex < 0) {
                            this.focusedOptionIndex = 0;
                        }
                        this.open = true;
                        this.$nextTick( () => {
                            this.$refs.search.focus();
                            this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
                                block:'center',
                            });
    
                        });                    
                    }
                }
            }
            </script>
        </div>
        <div
            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <button wire:click.prevent="addUserToList">Add</button>
        </div>
    </div>

    <ul class="border-t border-b border-gray-200 divide-y divide-gray-200" x-show="!selectUser">
        <li class="py-2 flex justify-between items-center">
            <button type="button" @click="selectUser = !selectUser"
                class="group -ml-1 bg-white p-1 rounded-md flex items-center focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <span
                    class="w-8 h-8 rounded-full border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400 group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-600">
                    @include('icons.plus')
                </span>
                <span class="ml-4 text-sm font-medium text-indigo-700 group-hover:text-indigo-500">Add instructor</span>
            </button>
        </li>
    </ul>
</div>