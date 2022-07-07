<div>
    <div>
        <div class="bg-indigo-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
                    <div class="md:flex md:items-center md:justify-between">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Search by style</h2>
                        <a href="{{ route('styles.list') }}"
                            class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
                            View all styles <span aria-hidden="true"> &rarr;</span></a>
                    </div>
                    <div class="mt-6 space-y-12 lg:space-y-0 grid grid-cols-3 gap-x-6 gap-y-0 md:gap-y-4">
                        @foreach ($collection as $item)
                        <div
                            class="bg-{{$item->color}} relative col-span-3 md:col-span-1 hover:opacity-75 h-52 rounded-lg">
                            <a href="{{ route('style.view', $item) }}" class="p-6 overflow-hidden">
                                <div aria-hidden="true" class="absolute inset-x-0 top-1/2">
                                    <div class="h-full flex flex-col justify-center items-center">
                                        <div class="relative text-center text-3xl font-bold text-white -mt-4">
                                            {{ $item->name }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>