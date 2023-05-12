<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex flex-row items-center justify-center py-2 px-4 left-10 top-12 bg-rose-500 rounded-lg text-white text-sm']) }}>
    {{ $slot }}
</button>
