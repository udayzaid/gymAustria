<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border border-bodyskin-blue rounded-md font-semibold text-xs text-bodyskin-blue uppercase tracking-widest shadow-sm hover:bg-bodyskin-blue/10 focus:outline-none focus:ring-2 focus:ring-bodyskin-blue focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
