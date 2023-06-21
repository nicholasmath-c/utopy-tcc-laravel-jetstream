<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Utopy') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/toastr.min.css','resources/css/app.css', 'resources/js/app.js', 'resources/js/admin.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class=" flex flex-col-2 min-h-screen bg-slate-900">
        <aside
            class="flex flex-col w-60 h-screen px-5 py-8 overflow-y-auto bg-slate-800 border-r border-main-500 rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 sticky top-0 ">
            <a href="{{ route('home') }}" class="mx-auto">
                <x-application-mark class="block h-9 w-auto" />
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 font-heading px-3 text-slate-400 text-center">
                        Painel Administrativo
                    </div>

                    <div class="space-y-3">
                        <label class="px-3 text-xs text-slate-300 uppercase">Análise</label>

                        <a class="flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-main-500 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-white {{ request()->routeIs('admin') ? 'text-white' : 'text-slate-400' }}"
                            href="{{ route('admin') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Visão Geral</span>
                        </a>
                    </div>

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-slate-300 uppercase">Jogos</label>

                        <a class="flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg hover:bg-main-500 hover:text-white {{ request()->routeIs('game.index') ? 'text-white' : 'text-slate-400' }}"
                            href="{{ route('game.index') }}">
                            <svg class="h-6 w-6 items-center stroke-slate-200 text-slate-200 fill-slate-200 decoration-slate-200 hover:stroke-white hover:text-white hover:fill-white hover:decoration-white {{ request()->routeIs('game.index') ? 'stroke-white text-white fill-white decoration-white' : 'stroke-slate-400 text-slate-400 fill-slate-400 decoration-slate-400' }}"
                                xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 16 16"
                                version="1.1" x="0px" y="0px">
                                <g transform="translate(0,-280.06665) " class="">
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 3.1756508,282.97668 a 0.26460978,0.26460978 0 0 0 -0.265625,0.26563 v 4.49804 a 0.26460978,0.26460978 0 0 0 0.265625,0.26368 h 4.4980469 a 0.26460978,0.26460978 0 0 0 0.2636719,-0.26368 v -4.49804 a 0.26460978,0.26460978 0 0 0 -0.2636719,-0.26563 z m 0.2636719,0.5293 h 3.96875 v 3.96875 h -3.96875 z" />
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 9.2596352,282.97668 a 0.26460978,0.26460978 0 0 0 -0.2636718,0.26563 v 4.49804 a 0.26460978,0.26460978 0 0 0 0.2636718,0.26368 h 4.4980468 a 0.26460978,0.26460978 0 0 0 0.265626,-0.26368 v -4.49804 a 0.26460978,0.26460978 0 0 0 -0.265626,-0.26563 z m 0.265625,0.5293 h 3.9687508 v 3.96875 H 9.5252602 Z" />
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 3.1756508,289.06262 a 0.26460978,0.26460978 0 0 0 -0.265625,0.26367 v 4.49805 a 0.26460978,0.26460978 0 0 0 0.265625,0.26562 h 4.4980469 a 0.26460978,0.26460978 0 0 0 0.2636719,-0.26562 v -4.49805 a 0.26460978,0.26460978 0 0 0 -0.2636719,-0.26367 z m 0.2636719,0.5293 h 3.96875 v 3.96875 h -3.96875 z" />
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 9.2596352,289.06262 a 0.26460978,0.26460978 0 0 0 -0.2636718,0.26367 v 4.49805 a 0.26460978,0.26460978 0 0 0 0.2636718,0.26562 h 4.4980468 a 0.26460978,0.26460978 0 0 0 0.265626,-0.26562 v -4.49805 a 0.26460978,0.26460978 0 0 0 -0.265626,-0.26367 z m 0.265625,0.5293 h 3.9687508 v 3.96875 H 9.5252602 Z" />
                                </g>/>
                            </svg>

                            <span class="mx-2 text-sm font-medium">Todos os Jogos</span>
                        </a>

                        <a class="flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg hover:bg-main-500 hover:text-white {{ request()->routeIs('game.create') ? 'text-white' : 'text-slate-400' }} hover:fill-white"
                            href="{{ route('game.create') }}">
                            <svg class="ml-1 h-5 w-5 items-center stroke-slate-200 text-slate-200 fill-slate-200 decoration-slate-200 hover:stroke-white hover:text-white hover:fill-white hover:decoration-white {{ request()->routeIs('game.create') ? 'stroke-white text-white fill-white decoration-white' : 'stroke-slate-400 text-slate-400 fill-slate-400 decoration-slate-400' }}"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                                style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                <path
                                    d="M50,97.5c-26.1915855,0-47.5-21.30793-47.5-47.5S23.8084145,2.5,50,2.5S97.5,23.8079319,97.5,50S76.1915817,97.5,50,97.5z   M50,8.4375c-22.9174557,0-41.5625,18.6445618-41.5625,41.5625S27.0825443,91.5625,50,91.5625S91.5625,72.9179382,91.5625,50  S72.9174576,8.4375,50,8.4375z" />
                                <path
                                    d="M50,79.6875c-1.6394806,0-2.96875-1.3287888-2.96875-2.96875v-53.4375c0-1.6399632,1.3292694-2.96875,2.96875-2.96875  s2.96875,1.3287868,2.96875,2.96875v53.4375C52.96875,78.3587112,51.6394806,79.6875,50,79.6875z" />
                                <path
                                    d="M76.71875,52.96875h-53.4375c-1.6394806,0-2.96875-1.3287849-2.96875-2.96875s1.3292694-2.96875,2.96875-2.96875h53.4375  c1.6394806,0,2.96875,1.3287849,2.96875,2.96875S78.3582306,52.96875,76.71875,52.96875z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Adicionar Jogo</span>
                        </a>
                    </div>

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-slate-300 uppercase">Gêneros</label>

                        <a class="flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg hover:bg-main-500 hover:text-white {{ request()->routeIs('genre-game.index') ? 'text-white' : 'text-slate-400' }}"
                            href="{{ route('genre-game.index') }}">
                            <svg class="h-6 w-6 items-center stroke-slate-200 text-slate-200 fill-slate-200 decoration-slate-200 hover:stroke-white hover:text-white hover:fill-white hover:decoration-white {{ request()->routeIs('genre-game.index') ? 'stroke-white text-white fill-white decoration-white' : 'stroke-slate-400 text-slate-400 fill-slate-400 decoration-slate-400' }}"
                                xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 16 16"
                                version="1.1" x="0px" y="0px">
                                <g transform="translate(0,-280.06665) " class="">
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 3.1756508,282.97668 a 0.26460978,0.26460978 0 0 0 -0.265625,0.26563 v 4.49804 a 0.26460978,0.26460978 0 0 0 0.265625,0.26368 h 4.4980469 a 0.26460978,0.26460978 0 0 0 0.2636719,-0.26368 v -4.49804 a 0.26460978,0.26460978 0 0 0 -0.2636719,-0.26563 z m 0.2636719,0.5293 h 3.96875 v 3.96875 h -3.96875 z" />
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 9.2596352,282.97668 a 0.26460978,0.26460978 0 0 0 -0.2636718,0.26563 v 4.49804 a 0.26460978,0.26460978 0 0 0 0.2636718,0.26368 h 4.4980468 a 0.26460978,0.26460978 0 0 0 0.265626,-0.26368 v -4.49804 a 0.26460978,0.26460978 0 0 0 -0.265626,-0.26563 z m 0.265625,0.5293 h 3.9687508 v 3.96875 H 9.5252602 Z" />
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 3.1756508,289.06262 a 0.26460978,0.26460978 0 0 0 -0.265625,0.26367 v 4.49805 a 0.26460978,0.26460978 0 0 0 0.265625,0.26562 h 4.4980469 a 0.26460978,0.26460978 0 0 0 0.2636719,-0.26562 v -4.49805 a 0.26460978,0.26460978 0 0 0 -0.2636719,-0.26367 z m 0.2636719,0.5293 h 3.96875 v 3.96875 h -3.96875 z" />
                                    <path
                                        style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.52916664;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                                        d="m 9.2596352,289.06262 a 0.26460978,0.26460978 0 0 0 -0.2636718,0.26367 v 4.49805 a 0.26460978,0.26460978 0 0 0 0.2636718,0.26562 h 4.4980468 a 0.26460978,0.26460978 0 0 0 0.265626,-0.26562 v -4.49805 a 0.26460978,0.26460978 0 0 0 -0.265626,-0.26367 z m 0.265625,0.5293 h 3.9687508 v 3.96875 H 9.5252602 Z" />
                                </g>/>
                            </svg>

                            <span class="mx-2 text-sm font-medium">Todos os Gêneros</span>
                        </a>

                        <a class="flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg hover:bg-main-500 hover:text-white {{ request()->routeIs('genre-game.create') ? 'text-white' : 'text-slate-400' }} hover:fill-white"
                            href="{{ route('genre-game.create') }}">
                            <svg class="ml-1 h-5 w-5 items-center stroke-slate-200 text-slate-200 fill-slate-200 decoration-slate-200 hover:stroke-white hover:text-white hover:fill-white hover:decoration-white {{ request()->routeIs('genre-game.create') ? 'stroke-white text-white fill-white decoration-white' : 'stroke-slate-400 text-slate-400 fill-slate-400 decoration-slate-400' }}"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                                style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                <path
                                    d="M50,97.5c-26.1915855,0-47.5-21.30793-47.5-47.5S23.8084145,2.5,50,2.5S97.5,23.8079319,97.5,50S76.1915817,97.5,50,97.5z   M50,8.4375c-22.9174557,0-41.5625,18.6445618-41.5625,41.5625S27.0825443,91.5625,50,91.5625S91.5625,72.9179382,91.5625,50  S72.9174576,8.4375,50,8.4375z" />
                                <path
                                    d="M50,79.6875c-1.6394806,0-2.96875-1.3287888-2.96875-2.96875v-53.4375c0-1.6399632,1.3292694-2.96875,2.96875-2.96875  s2.96875,1.3287868,2.96875,2.96875v53.4375C52.96875,78.3587112,51.6394806,79.6875,50,79.6875z" />
                                <path
                                    d="M76.71875,52.96875h-53.4375c-1.6394806,0-2.96875-1.3287849-2.96875-2.96875s1.3292694-2.96875,2.96875-2.96875h53.4375  c1.6394806,0,2.96875,1.3287849,2.96875,2.96875S78.3582306,52.96875,76.71875,52.96875z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Adicionar Gênero</span>
                        </a>
                    </div>

                    <div class="space-y-16">
                        <a class="flex items-center px-3 py-2 text-slate-200 transition-colors duration-300 transform rounded-lg hover:bg-main-500"
                            href="{{ route('home') }}">
                            <svg class="fill-slate-200 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" viewBox="0 0 100 100" x="0px" y="0px">
                                <title>UI_Essentials</title>
                                <polygon
                                    points="67.36 93.98 23.42 49.99 67.39 6.02 76.58 15.21 41.8 50 76.56 84.79 67.36 93.98" />
                                <text x="0" y="115" fill="#000000" font-size="5px"
                                    font-weight="bold"
                                    font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">
                            </svg>

                            <span class="mx-2 text-sm font-medium">Voltar</span>
                        </a>
                    </div>
                </nav>
            </div>
        </aside>
        <!-- <nav x-data="{ open: false }" class="bg-slate-900 border-b border-main-500">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">

                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('home') }}">
                                <x-application-mark class="block h-9 w-auto" />
                            </a>
                        </div>

                        <div
                            class="font-heading text-white font-sm font-bold hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                            ADMIN AREA
                        </div>


                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                                {{ __('Home') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('game.index') }}" :active="request()->routeIs('game.index')">
                                {{ __('Jogos') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('genre-game.index') }}" :active="request()->routeIs('genre-game.index')">
                                {{ __('Gêneros de Jogos') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </nav> -->




        <!-- Page Content -->
        <main class="flex flex-col justify-center items-center w-full text-white">
            {{ $slot }}
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('message'))
        <script>
            toastr.options = {
                "positionClass": "toast-bottom-right"
            };

            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif

    @stack('modals')

    @livewireScripts
</body>

</html>
