<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex flex-row items-center justify-center p-4 gap-4 w-20 h-12 left-10 top-12 bg-main-500 rounded-lg text-white']) }}>
    {{ $slot }}
</button>
