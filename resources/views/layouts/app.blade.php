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
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

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

        <footer>
            <div class="footer-column">
              <h3>Navegação</h3>
              <ul>
                <li>Aventura</li>
                <li>Terror</li>
              </ul>
            </div>
            <div class="footer-column">
              <h3>Redes Sociais</h3>
              <ul>
                <li>Instagram</li>
                <li>Twitter</li>
                <li>Facebook</li>
              </ul>
            </div>
            <div class="footer-column">
              <h3>Conta</h3>
              <ul>
                <li>Criar conta</li>
                <li>Login</li>
              </ul>
            </div>
            <div class="footer-bottom">
              <p>&copy; 2023 Utopy - Plataforma de Jogos Indies. Todos os direitos reservados.</p>
            </div>
          </footer>
    </body>
</html>

<style>
    /* Estilos CSS para o footer */
    footer {
      background-color: #0f172a	;
      padding: 20px;
      text-align: center;
    }

    .footer-column {
      display: inline-block;
      vertical-align: top;
      margin-right: 250px;
    }

    .footer-column h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
    }

    .footer-column li {
      margin-bottom: 50px;
    }

    .footer-bottom {
      font-size: 14px;
      color: white ;
    }
  </style>
