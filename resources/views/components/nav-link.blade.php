@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-bodyskin-blue text-sm font-medium leading-5 text-bodyskin-blue focus:outline-none focus:border-bodyskin-blue/80 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-bodyskin-blue hover:border-bodyskin-blue/40 focus:outline-none focus:text-bodyskin-blue focus:border-bodyskin-blue/40 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
