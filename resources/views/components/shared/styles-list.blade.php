<div>
    <ul>
        @foreach ($list as $style)
        <li class="text-sm">{{ $style->name }}</li>
        @endforeach
    </ul>
</div>