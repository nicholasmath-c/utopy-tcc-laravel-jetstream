<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Informação do Perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Altere suas informações do perfil e endereço de email.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4 bg-slate-800">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="foto" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-5 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Selecionar Uma Nova Foto') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remover Foto') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="foto" class="mt-2" />
            </div>
        @endif

        <!-- Firstname -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="firstname" value="{{ __('Nome') }}" />
            <x-input id="firstname" type="text" class="mt-1 block w-full" wire:model.defer="state.firstname" autocomplete="name" />
            <x-input-error for="firstname" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="lastname" value="{{ __('Sobrenome') }}" />
            <x-input id="lastname" type="text" class="mt-1 block w-full" wire:model.defer="state.lastname" autocomplete="lastname" />
            <x-input-error for="lastname" class="mt-2" />
        </div>

        <!-- Nickname -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="nickname" value="{{ __('Apelido') }}" />
            <x-input id="nickname" type="text" class="mt-1 block w-full" wire:model.defer="state.nickname" autocomplete="nickname" />
            <x-input-error for="nickname" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2 text-yellow-300">
                    {{ __('Seu endereço de email não está verificado.') }}

                    <button type="button" class="underline text-sm text-slate-500 hover:text-main-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-400" wire:click.prevent="sendEmailVerification">
                        {{ __('Clique aqui para enviar novamente a verificação de email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('Um novo link de verificação foi enviado para seu email.') }}
                    </p>
                @endif
            @endif
        </div>

        <!-- Cellphone -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="cellphone" value="{{ __('Celular') }}" />
            <x-input id="cellphone" type="text" class="mt-1 block w-full" wire:model.defer="state.cellphone" autocomplete="cellphone" />
            <x-input-error for="cellphone" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Salvo.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Salvar') }}
        </x-button>
    </x-slot>
</x-form-section>
