<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center gap-2 rounded-lg
                           bg-blue-600 px-4 py-2.5
                           text-sm font-semibold text-white
                           shadow-sm shadow-blue-600/20
                           transition-all duration-200
                           hover:bg-blue-700 hover:shadow-md hover:shadow-blue-600/25
                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                           active:scale-95',
    ]) }}>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="h-5 w-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
    {{ $slot }}
</a>
