<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
        @yield('menu')

        <a href="/" class="menu">Página Inicial</a>
        <a href="/sessao" class="menu">Sessões</a>
        <a href="reserva" class="menu">Minhas Reservas</a>

        @yield('content')
        
    <body>

    <footer>
        <p> CorujaFilmes &copy; 2023</p>
    </footer>

    </body>
</html>