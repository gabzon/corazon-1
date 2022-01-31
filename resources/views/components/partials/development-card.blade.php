<div
    class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg md:h-auto md:w-72 md:rounded-none md:rounded-l-lg"
        src="{{ asset('images/under-development.jpg') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal w-full">
        <div class="flex flex-row justify-between items-center">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Coming soon!</h5>
            <div class="flex-1 flex justify-end">
                <a href="{{ $link }}" class="text-indigo-500 hover:text-indigo-800">details</a>
            </div>

        </div>

        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $description }}</p>
        <div class="text-sm flex flex-col my-2">
            <span class="text-gray-900 font-bold">Estimated start date of development:</span>
            <span class="text-gray-600">{{ $start}}</span>
        </div>
        <div class="text-sm flex flex-col">
            <span class="text-gray-900 font-bold">Estimated duration of development:</span>
            <span class="text-gray-600">{{ $duration}}</span>
        </div>
    </div>
</div>