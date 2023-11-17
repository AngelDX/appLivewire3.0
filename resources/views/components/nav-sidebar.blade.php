@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-gray-100 bg-gray-700 bg-opacity-25 border-l-4 border-indigo-600'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
