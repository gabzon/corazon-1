<div class="flex items-center space-x-2">
    @if ($model->instructors->count() > 0)
    <div class="col-start-2 row-start-1 row-end-3">
        <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
            @foreach ($model->instructors as $user)
            <img src="{{ $user->photo }}" alt="{{ $user->name }}"
                class="w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white dark:ring-slate-700 dark:group-hover:ring-white object-cover"
                loading="lazy">
            @endforeach
        </dd>
    </div>
    @endif
    <div class="text-sm text-gray-600 truncate group-hover:text-indigo-200">
        {{ trans_choice(
        '{0} no registrations|{1} :count registered|[2,*] :count registered',
        $model->registrations()->count(), ['count' =>
        $model->registrations()->count()]) }}
    </div>
</div>