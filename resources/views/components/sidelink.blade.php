@props(['active'])

@php
$classes = ($active ?? false)
            ? 'hover:grow hover:shadow-xl w-full items-center justify-center px-9 py-4 text-sm font-medium leading-5 text-blue-400 focus:outline-none transition'
            : 'hover:grow hover:shadow-xl w-full items-center justify-center px-9 py-4 text-sm font-medium leading-5 text-white hover:text-blue-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
