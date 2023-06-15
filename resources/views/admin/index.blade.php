<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg">
                @if (session()->has('success'))
                <div class="text-sm text-white mb-2">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if (isset($errors) && count($errors) > 0)
                <div class="text-sm text-main-500 mb-2">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            </div>
        </div>
    </div>
</x-admin-layout>
