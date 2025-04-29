@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-bodyskin-blue text-start text-base font-medium text-bodyskin-blue bg-bodyskin-blue/10 focus:outline-none focus:text-bodyskin-blue focus:bg-bodyskin-blue/10 focus:border-bodyskin-blue transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-white hover:text-bodyskin-blue hover:bg-bodyskin-blue/5 hover:border-bodyskin-blue/40 focus:outline-none focus:text-bodyskin-blue focus:bg-bodyskin-blue/5 focus:border-bodyskin-blue/40 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
