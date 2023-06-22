<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Utopy') }}</title>

    <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.7.0.min.js">
        </script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    @vite(['resources/css/toastr.min.css', 'resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-slate-900">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main>
            <div class="py-6">
                <div class=" max-w-7xl mx-auto">
                    <div class="text-white bg-slate-900 overflow-hidden sm:rounded-lg p-9">
                        {{ $slot }}
                    </div>
                </div>
            </div>

        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <!-- component -->
    <div class="flex items-end bg-white">

        <footer class="w-full text-gray-700 bg-slate-800 body-font">
            <div
                class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
                <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                    <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                    <p class="mt-3 text-sm text-main-100">Siga-nos nas redes sociais</p>
                    <div class="mt-4">
                        <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                            <a class="text-main-100 cursor-pointer hover:text-gray-700">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-3 text-blue-500 cursor-pointer hover:text-gray-700">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-3 text-main-500 cursor-pointer hover:text-gray-700">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5"
                                        ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a class="ml-3 text-blue-800 cursor-pointer hover:text-gray-700">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none"
                                        d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                    </path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                    <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                        <h2 class="mb-3 text-sm font-medium tracking-widest text-white uppercase title-font">Sobre</h2>
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Company</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Careers</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Blog</a>
                            </li>
                        </nav>
                    </div>
                    <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                        <h2 class="mb-3 text-sm font-medium tracking-widest text-white uppercase title-font">Navegue
                        </h2>
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Jogos</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Página inicial</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Perfil do usuário</a>
                            </li>
                        </nav>
                    </div>

                    <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                        <h2 class="mb-3 text-sm font-medium tracking-widest text-white uppercase title-font">Contato
                        </h2>
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-white">Mande sua mensagem</a>
                            </li>

                            <li class=" flex flex-row mt-3">
                                <svg class=" mr-2 fill-gray-500 hover:fill-white"xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <a href="wa.me/5511940538966" class="text-gray-500 cursor-pointer hover:text-white">
                                    55 11 94053-4966</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bg-slate-800">
                <div class="container px-5 py-4 mx-auto">
                    <p class="text-sm text-gray-200 capitalize xl:text-center">© 2023 Utopy Games </p>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
