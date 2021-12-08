@if ($course->video1)
<div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
    {!! $course->video1 !!}
</div>
@endif

@if ($course->video2)
<br>
<div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
    {!! $course->video2 !!}
</div>
@endif

@if ($course->video3)
<br>
<div class="block w-full aspect-w-10 aspect-h-6 rounded-lg overflow-hidden">
    {!! $course->video3 !!}
</div>
@endif