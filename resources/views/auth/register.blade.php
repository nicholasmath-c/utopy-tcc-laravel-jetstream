<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex space-x-3">
                <x-input id="firstname" placeholder="Nome" class="block mt-1 w-full placeholder-gray-400" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                <x-input id="lastname" placeholder="Sobrenome" class="block mt-1 w-full placeholder-gray-400" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            </div>

            <div class="mt-4">
                <x-input id="nickname" placeholder="Apelido" class="block mt-1 w-full placeholder-gray-400" type="text" name="nickname" :value="old('nickname')" required autofocus autocomplete="nickname" />
            </div>

            <div class="mt-4">
                <x-input id="email" placeholder="Email" class="block mt-1 w-full placeholder-gray-400" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-input id="password" placeholder="Senha" class="block mt-1 w-full placeholder-gray-400" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-input id="password_confirmation" placeholder="Repetir Senha" class="block mt-1 w-full placeholder-gray-400" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-input id="cellphone" placeholder="Celular" class="block mt-1 w-full placeholder-gray-400" type="text" name="cellphone" :value="old('cellphone')" required autofocus autocomplete="cellphone"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('Eu concordo com os :Termos_de_Serviços e :Politicas_de_Privacidades', [
                                        'Termos_de_Serviços' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-white hover:text-red-500 rounded-md focus:outline-none ">'.__('Termos_de_Serviços').'</a>',
                                        'Politicas_de_Privacidades' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-white hover:text-red-500 rounded-md focus:outline-none ">'.__('Políticas_de_Privacidade').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-red-500 rounded-md focus:outline-none " href="{{ route('login') }}">
                    {{ __('Já possui uma conta?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
