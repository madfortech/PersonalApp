@props(['active'])

@php
$classes = ($active ?? false)
            ?  'capitalize'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:bg-emerald-700	text-gray-800 hover:text-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-50 focus:border-gray-300 transition duration-150 ease-in-out no-underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
