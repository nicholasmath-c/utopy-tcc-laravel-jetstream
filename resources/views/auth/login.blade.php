<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class=" text-white">
            <h1 class="font-heading text-6xl"> <span class=" font-bold "> Boas-Vindas </span> à sua Utopia </h1>
        </div>

        <div class=" mt-4 mb-16 text-white">
            <h2> <span class="text-slate-400 "> Descubra mundos incríveis num </span>  universo
                de projetos independentes! </h2>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input id="email" placeholder="Email" class="block mt-1 w-full placeholder-gray-400 " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-input id="password" placeholder="Senha" class="block mt-1 w-full placeholder-gray-400" type="password" name="password" required autocomplete="current-password" />
            </div>


            <div class="flex mt-4 space-x-32">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white">{{ __('Lembrar de mim') }}</span>
                </label>
                    <div class="">
                        @if (route('password.request'))
                            <a class="underline text-sm text-white hover:text-red-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua Senha?') }}
                            </a>
                        @endif
                    </div>
            </div>

            <div class="flex justify-center">
                <x-button class=" w-96 mt-10">
                    {{ __('Entrar') }}
                </x-button>
            </div>

            <div class="flex justify-center mt-8">
                <p class=" text-white">Não possui uma conta? <a class="text-white font-bold hover:text-red-500 rounded-md focus:outline-none" href="register">Cadastre-se</a> </p>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>
