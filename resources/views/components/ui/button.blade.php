<a href="{{ $route }}" {{ $attributes }}
    class="inline-flex items-center border font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 {{ $color ?? 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500' }} {{ $size ?? 'px-4 py-2 text-sm' }} {{ $shape ?? 'rounded-md' }} {{ $css ?? '' }}">
    {{ $slot ?? '' }}
</a>