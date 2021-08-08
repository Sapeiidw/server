@props(['active'])

@php
$classes = ($active ?? false)
            ? 'hover:grow hover:shadow-xl inline-flex items-center px-1 pt-1 border-b-2 border-white text-sm font-medium leading-5 text-blue-500 focus:outline-none focus:border-indigo-700 transition'
            : 'hover:grow hover:shadow-xl inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-600 hover:text-gray-700 hover:border-blue-500 focus:outline-none focus:text-gray-700 focus:border-indigo-700 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
