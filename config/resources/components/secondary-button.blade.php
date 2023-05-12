<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex text-center items-center px-4 py-2 bg-slate-600 border border-gray-300 rounded-md font-semibold text-xs text-slate-50 uppercase  shadow-sm hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-main-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>