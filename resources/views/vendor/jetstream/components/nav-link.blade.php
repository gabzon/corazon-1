@props(['active'])

@php
$classes = ($active ?? false)
? 'bg-gray-100 text-gray-900 rounded-md py-2 px-3 inline-flex items-center text-sm font-medium'
: 'text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-md py-2 px-3 inline-flex items-center text-sm
font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>