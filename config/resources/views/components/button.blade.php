<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex flex-row items-center justify-center py-2 px-4 left-10 top-12 bg-main-500 rounded-lg text-white text-sm uppercase font-semibold hover:bg-main-600 focus:outline-none focus:bg-main-400 focus:ring-2 focus:ring-main-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>