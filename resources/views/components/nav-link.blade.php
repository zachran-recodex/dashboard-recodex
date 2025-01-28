@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'bg-gray-50 text-primary-600 dark:bg-gray-800 dark:text-primary-400'
            : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 dark:text-gray-200 dark:hover:text-white dark:hover:bg-gray-800';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
