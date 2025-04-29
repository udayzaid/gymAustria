<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-bodyskin-blue border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-bodyskin-blue/80 focus:bg-bodyskin-blue/80 active:bg-bodyskin-blue/90 focus:outline-none focus:ring-2 focus:ring-bodyskin-blue focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
