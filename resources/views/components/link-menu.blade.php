@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-b-bcolor'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>