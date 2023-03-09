<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-logo1 border border-transparent rounded-lg active:bg-logo1 hover:bg-logo2 focus:outline-none focus:shadow-outline-purple']) }}>
    {{ $slot }}
</button>
