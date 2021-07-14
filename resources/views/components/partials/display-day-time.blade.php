<div>
    <dl>
        @if ($course->monday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Mon</dt>
            <dd>
                {{ $course->getTime('start_time_mon')->format('H:i') }} -
                {{ $course->getTime('end_time_mon')->format('H:i') }}
            </dd>
        </div>
        @endif
        @if ($course->tuesday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Tue</dt>
            <dd>
                {{ $course->getTime('start_time_tue')->format('H:i') }} -
                {{ $course->getTime('end_time_tue')->format('H:i') }}
            </dd>
        </div>
        @endif
        @if ($course->wednesday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Wed</dt>
            <dd>
                {{ $course->getTime('start_time_wed')->format('H:i') }} -
                {{ $course->getTime('end_time_wed')->format('H:i') }}
            </dd>
        </div>
        @endif
        @if ($course->thursday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Thu</dt>
            <dd>
                {{ $course->getTime('start_time_thu')->format('H:i') }} -
                {{ $course->getTime('end_time_thu')->format('H:i') }}
            </dd>
        </div>
        @endif
        @if ($course->friday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Fri</dt>
            <dd>
                {{ $course->getTime('start_time_fri')->format('H:i') }} -
                {{ $course->getTime('end_time_fri')->format('H:i') }}
            </dd>
        </div>
        @endif
        @if ($course->saturday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Sat</dt>
            <dd>
                {{ $course->getTime('start_time_sat')->format('H:i') }} -
                {{ $course->getTime('end_time_sat')->format('H:i') }}
            </dd>
        </div>
        @endif
        @if ($course->sunday)
        <div class="flex justify-between items-center space-x-2">
            <dt>Sun</dt>
            <dd>
                {{ $course->getTime('start_time_sun')->format('H:i') }} -
                {{ $course->getTime('end_time_sun')->format('H:i') }}
            </dd>
        </div>
        @endif
    </dl>
</div>