<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-8 text-base text-gray-400">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar o seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova senha.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-input id="email" placeholder="Email" class="block mt-1 w-full placeholder-gray-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Link de redefinição de senha por e-mail.') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
