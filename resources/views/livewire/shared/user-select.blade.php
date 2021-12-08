<div>
    <x-slot name="css">
        <style>
            .top-100 {
                top: 100%
            }

            .bottom-100 {
                bottom: 100%
            }

            .max-h-select {
                max-height: 300px;
            }
        </style>
    </x-slot>

    <div class="grid grid-cols-12 gap-6 items-center">
        <div class="col-span-10">
            <div class="flex flex-col items-center">
                <div class="w-full flex flex-col items-center">
                    <div class="w-full">
                        <div x-data="selectConfigs()" x-init="fetchOptions()"
                            class="flex flex-col items-center relative">
                            <div class="w-full">
                                <div @click.away="close()"
                                    class="my-2 py-1 bg-white flex border border-gray-300 rounded">
                                    <input x-model="filter" x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        @mousedown="open()" @keydown.enter.stop.prevent="selectOption()"
                                        @keydown.arrow-up.prevent="focusPrevOption()"
                                        @keydown.arrow-down.prevent="focusNextOption()"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                    <div class="text-gray-300 w-8 py-1 pl-2 pr-1 flex items-center border-gray-200">
                                        <button @click="toggle()" type="button"
                                            class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                            <svg class="h-5 w-5 text-gray-400 hover:text-indigo-700"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div x-show="isOpen()"
                                class="absolute shadow bg-white top-100 z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
                                <div class="flex flex-col w-full">
                                    <template x-for="(option, index) in filteredOptions()" :key="index">
                                        <div @click="onOptionClick(index)" :class="classOption(option.id, index)"
                                            :aria-selected="focusedOptionIndex === index">
                                            <div
                                                class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-indigo-300">
                                                <div class="w-6 flex flex-col items-center">
                                                    <div
                                                        class="flex relative w-5 h-5 bg-orange-500 justify-center items-center m-1 mr-2 w-4 h-4 mt-1 rounded-full ">
                                                        <img class="rounded-full" alt="A" x-bind:src="option.avatar">
                                                    </div>
                                                </div>
                                                <div class="w-full items-center flex">
                                                    <div class="mx-2 -mt-1"><span x-text="option.name"></span>
                                                        <div class="text-xs truncate w-full normal-case font-normal -mt-1 text-gray-500"
                                                            x-text="option.email"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <button type="button" wire:click="add"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add
            </button>
        </div>
    </div>



    @push('scripts')
    <script>
        function selectConfigs() {
            return {
                filter: '',
                show: false,
                selected: null,
                focusedOptionIndex: null,
                options: null,
                
                close() {
                    this.show = false;
                    this.filter = this.selectedOrg();
                    this.focusedOptionIndex = this.selected ? this.focusedOptionIndex : null;
                },
                
                open() {
                    this.show = true;
                    this.filter = '';
                },
                
                toggle() {
                    if (this.show) {
                        this.close();
                    } else {
                        this.open()
                    }
                },
                
                isOpen() { return this.show === true },
                
                selectedOrg() { 
                    return this.selected ? this.selected.name : this.filter; 
                },

                classOption(id, index) {
                    const isSelected = this.selected ? (id == this.selected.id) : false;
                    const isFocused = (index == this.focusedOptionIndex);
                    return {
                        'cursor-pointer w-full border-gray-100 border-b hover:bg-indigo-50': true,
                        'bg-indigo-100': isSelected,
                        'bg-indigo-50': isFocused
                    };
                },
                
                fetchOptions() {
                    fetch('https://corazon.test/api/select-users')                    
                    .then(response => response.json())
                    .then(data => this.options = data);    
                    console.log(this.options);
                },

                filteredOptions() {
                    return this.options ? this.options.filter(
                        option => {
                                return (option.name.toLowerCase().indexOf(this.filter) > -1) || (option.email.toLowerCase().indexOf(this.filter) > -1)
                            }
                        ) : {}
                    },
                
                onOptionClick(index) {
                    this.focusedOptionIndex = index;                    
                    this.selectOption();
                },

                selectOption() {
                    if (!this.isOpen()) {
                        return;
                    }

                    this.focusedOptionIndex = this.focusedOptionIndex ?? 0;
                    
                    const selected = this.filteredOptions()[this.focusedOptionIndex]                                        

                    if (this.selected && this.selected.id == selected.id) {
                        this.filter = '';
                        this.selected = null;
                    } else {
                        this.selected = selected;
                        this.filter = this.selectedOrg();                        
                    }
                    
                    @this.set('selected', selected);
                    
                    this.close();
                },

                focusPrevOption() {
                    if (!this.isOpen()) {
                        return;
                    }
                    
                    const optionsNum = Object.keys(this.filteredOptions()).length - 1;

                    if (this.focusedOptionIndex > 0 && this.focusedOptionIndex <= optionsNum) { 
                        this.focusedOptionIndex--; 
                    } else if ( this.focusedOptionIndex == 0 ) { 
                        this.focusedOptionIndex = optionsNum; 
                    } 
                }, 

                focusNextOption() { 
                    const optionsNum = Object.keys(this.filteredOptions()).length - 1; if (!this.isOpen()) { 
                        this.open(); 
                    }
                    if (this.focusedOptionIndex==null || this.focusedOptionIndex==optionsNum) { 
                        this.focusedOptionIndex=0; 
                    } else if (this.focusedOptionIndex>= 0 && this.focusedOptionIndex < optionsNum) { 
                        this.focusedOptionIndex++; 
                    } 
                } 
            } 
        }
    </script>
    @endpush
</div>